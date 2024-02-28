<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class DashboardProfileController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        $title = 'Edit Profile';
        return view('dashboard.profile.edit', compact('user', 'title'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->route('profile.edit')
                ->withErrors($validator)
                ->withInput();
        }

        $user = User::find($user->id);
        if (!$user) {
            return redirect()->route('profile.edit')->with('error', 'Data tidak ditemukan!');
        }

        $user->nama = $request->nama;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('profile.edit')->with('success', 'Profile berhasil diupdate!');
    }
}