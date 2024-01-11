<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $artikel = Artikel::getDataArtikel($request);

        return view('dashboard.artikel.index',[
            'title' => 'Artikel',
            'active' => 'artikel',
            'artikel' => $artikel
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();

        return view('dashboard.artikel.create',[
            'title' => 'Artikel',
            'active' => 'artikel',
            'kategori' => $kategori
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
            'id_kategori' => 'required',
            'judul' => 'required',
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

        Artikel::create($data);

        return redirect('/dashboard/artikel')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show(Artikel $artikel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Kategori::all();
        $artikel = Artikel::getDataArtikelById($id);

        return view('dashboard.artikel.edit',[
            'title' => 'Artikel',
            'active' => 'artikel',
            'kategori' => $kategori,
            'artikel' => $artikel
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'id_kategori' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $artikel = Artikel::find($id);

        if (!$artikel) {
            return redirect('/dashboard/artikel')->with('error', 'Data tidak ditemukan');
        }

        $artikel->id_kategori = $validatedData['id_kategori'];
        $artikel->judul = $validatedData['judul'];
        $artikel->deskripsi = $validatedData['deskripsi'];

        if ($request->hasFile('gambar')) {
            $gambarLama = $artikel->gambar;
            if ($gambarLama) {
                Storage::delete('public/gambar/' . $gambarLama);
            }

            $fileName = $this->generateRandomString();
            $extension = $request->file('gambar')->extension();
            $gambarBaru = $fileName . '.' . $extension;

            $request->file('gambar')->storeAs('public/gambar', $gambarBaru);
            $artikel->gambar = $gambarBaru;
        }

        $artikel->save();

        return redirect('/dashboard/artikel')->with('success', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel = Artikel::find($id);
        $artikel->delete();

        return redirect('/dashboard/artikel')->with('danger', 'Data berhasil dihapus');
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