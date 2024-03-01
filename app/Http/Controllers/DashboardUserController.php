<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class DashboardUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();

        return view('dashboard.user.index', [
            'title' => 'Dashboard User',
            'active' => 'user',
            'user' => $user
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.user.create', [
            'title' => 'Tambah User',
            'active' => 'user'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi data masukan
        $validator = Validator::make($request->all(), [
            'nama' => 'required|min:3|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'role' => 'required|in:superadmin,admin',
        ]);

        // Jika validasi gagal, kembalikan respons dengan pesan error
        if ($validator->fails()) {
            return redirect('/dashboard/user/create')->withErrors($validator)->withInput();
        }

        // Buat entitas user baru
        $user = new User([
            'nama' => $request->input('nama'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'role' => $request->input('role'),
        ]);

        // Simpan data user baru
        $user->save();

        // Redirect kembali dengan pesan sukses
        return redirect('/dashboard/user')->with('success', 'Data user berhasil ditambah');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('dashboard.user.edit', [
            'title' => 'Edit User',
            'active' => 'user',
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        // Validasi data masukan
        $validator = Validator::make($request->all(), [
            'nama' => 'required|min:3|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable|min:6',
            'role' => 'required|in:superadmin,admin',
        ]);

        // Jika validasi gagal, kembalikan respons dengan pesan error
        if ($validator->fails()) {
            return redirect('/dashboard/user/' . $id . '/edit')->withErrors($validator)->withInput();
        }

        // Temukan user berdasarkan ID
        $user = User::find($id);

        // Jika user tidak ditemukan, kembalikan respons dengan pesan error
        if (!$user) {
            return redirect('/dashboard/user')->with('error', 'Data tidak ditemukan');
        }

        // Update data user
        $user->nama = $request->input('nama');
        $user->email = $request->input('email');
        $user->role = $request->input('role');

        // Jika password diisi, update password
        if ($request->filled('password')) {
            $user->password = Hash::make($request->input('password'));
        }

        // Simpan perubahan
        $user->save();

        // Redirect kembali dengan pesan sukses
        return redirect('/dashboard/user')->with('success', 'Data user berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('/dashboard/user')->with('danger', 'Data berhasil dihapus');
    }
}