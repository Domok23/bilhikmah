<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BerandaArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $kategori = Kategori::all();

        // Cek apakah ada nilai di form pencarian
        if ($request->has('cari')) {
            $artikel = Artikel::searchData($request, ['cari' => $request->cari]);
        } elseif ($request->has('id')) {
            // Cek apakah ada nilai di form kategori
            $artikel = Artikel::getDataArtikel($request, ['id' => $request->id]);
        } else {
            // Jika tidak ada kedua form diisi, ambil semua data
            $artikel = Artikel::getDataArtikel($request);
        }

        return view('artikel', [
            'title' => 'Artikel',
            'active' => 'artikel',
            'artikel' => $artikel,
            'kategori' => $kategori
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $getAllArtikel = Artikel::take(4)->get();
        $artikel = Artikel::getDataArtikelById($id);
        $kategori = Kategori::all();

        return view('artikel-detail', [
            'title' => 'Artikel',
            'active' => 'artikel',
            'artikel' => $artikel,
            'getAllArtikel' => $getAllArtikel,
            'kategori' => $kategori
        ]);
    }
}