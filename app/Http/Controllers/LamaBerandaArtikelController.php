<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BerandaArtikelController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        $artikel = Artikel::all();

        return view('artikel', [
            'title' => 'Artikel',
            'action' => 'artikel',
            'artikel' => $artikel,
            'kategori' => $kategori
        ]);
    }

    public function show($id)
    {
        $getAllArtikel = Artikel::take(3)->get();
        $artikel = Artikel::getDataArtikelById($id);

        return view('artikel-detail', [
            'title' => 'Artikel',
            'action' => 'artikel',
            'artikel' => $artikel,
            'getAllArtikel' => $getAllArtikel
        ]);
    }
}
