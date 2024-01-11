<?php

namespace App\Http\Controllers;

use App\Models\Isyarat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardIsyaratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $isyarat = Isyarat::all();

        return view('dashboard.isyarat.index',[
            'title' => 'Isyarat',
            'active' => 'isyarat',
            'isyarat' => $isyarat
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.isyarat.create',[
            'title' => 'Isyarat',
            'active' => 'isyarat'
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
        $validatedData = $request->validate([
            'deskripsi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $gambar = null;
        if ($request->hasFile('gambar')) {
            $fileName = $this->generateRandomString();
            $extention = $request->file('gambar')->extension();
            $gambar = $fileName . '.' . $extention;

            $request->file('gambar')->storeAs('public/gambar', $gambar);
        }

        $data = $validatedData;
        $data['gambar'] = $gambar;

        Isyarat::create($data);

        return redirect('/dashboard/isyarat')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Isyarat  $isyarat
     * @return \Illuminate\Http\Response
     */
    public function show(Isyarat $isyarat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Isyarat  $isyarat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $isyarat = Isyarat::find($id);

        return view('dashboard.isyarat.edit',[
            'title' => 'Isyarat',
            'active' => 'isyarat',
            'isyarat' => $isyarat
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Isyarat  $isyarat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'deskripsi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $isyarat = Isyarat::find($id);

        if (!$isyarat) {
            return redirect('/dashboard/isyarat')->with('error', 'Data tidak ditemukan');
        }

        $isyarat->deskripsi = $validatedData['deskripsi'];

        if ($request->hasFile('gambar')) {
            $gambarLama = $isyarat->gambar;
            if ($gambarLama) {
                Storage::delete('public/gambar/' . $gambarLama);
            }

            $fileName = $this->generateRandomString();
            $extension = $request->file('gambar')->extension();
            $gambarBaru = $fileName . '.' . $extension;

            $request->file('gambar')->storeAs('public/gambar', $gambarBaru);
            $isyarat->gambar = $gambarBaru;
        }

        $isyarat->save();

        return redirect('/dashboard/isyarat')->with('success', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Isyarat  $isyarat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $isyarat = Isyarat::find($id);
        $isyarat->delete();

        return redirect('/dashboard/isyarat')->with('danger', 'Data berhasil dihapus');
    }

    function generateRandomString($length = 30) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
