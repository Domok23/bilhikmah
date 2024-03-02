<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Artikel;
use App\Models\Poster;
use App\Models\Video;
use Illuminate\Http\Request;

class DashboardKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::all();

        return view('dashboard.kategori.index', [
            'title' => 'Dashboard Kategori',
            'active' => 'kategori',
            'kategori' => $kategori
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.kategori.create', [
            'title' => 'Tambah Kategori',
            'active' => 'kategori'
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
        $validate = $request->validate([
            'judul' => 'unique:kategoris|required|min:3|max:255',
        ]);

        $kategori = Kategori::create($validate);

        return redirect('/dashboard/kategori')->with('success', 'Kategori "' . $kategori->judul . '" berhasil ditambah');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Kategori::find($id);

        return view('dashboard.kategori.edit', [
            'title' => 'Edit Kategori',
            'active' => 'kategori',
            'kategori' => $kategori
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'judul' => 'unique:kategoris|required|min:3|max:255'
        ];

        $validatedData = $request->validate($rules);

        $kategori = Kategori::find($id);
        Kategori::where('id', $kategori->id)->update($validatedData);

        return redirect('/dashboard/kategori')->with('success', 'Kategori "' . $kategori->judul . '" berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Cek apakah kategori digunakan di tabel Artikel
        $artikelCount = Artikel::where('id_kategori', $id)->count();

        // Cek apakah kategori digunakan di tabel Poster
        $posterCount = Poster::where('id_kategori', $id)->count();

        // Cek apakah kategori digunakan di tabel Video
        $videoCount = Video::where('id_kategori', $id)->count();

        // Jika kategori digunakan di salah satu tabel, tampilkan pesan alert
        if ($artikelCount > 0 || $posterCount > 0 || $videoCount > 0) {
            return redirect('/dashboard/kategori')->with('failed', 'Kategori tidak bisa dihapus karena sedang digunakan di Artikel, Poster, ataupun Video.');
        }

        // Jika tidak digunakan, lanjutkan proses penghapusan
        $kategori = Kategori::find($id);
        $judulKategori = $kategori->judul;
        $kategori->delete();

        return redirect('/dashboard/kategori')->with('danger', 'Ketegori "' . $judulKategori . '" berhasil dihapus');
    }
}