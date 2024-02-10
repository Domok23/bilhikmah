<?php

namespace App\Http\Controllers;

use App\Models\Poster;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BerandaPosterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request  $request)
    {
        $kategori = Kategori::all();
        // Cek apakah ada nilai di form pencarian
        if ($request->has('cari')) {
            $poster = Poster::searchData($request, ['cari' => $request->cari]);
        } elseif ($request->has('id')) {
            // Cek apakah ada nilai di form kategori
            $poster = Poster::getDataPoster($request, ['id' => $request->id]);
        } else {
            // Jika tidak ada kedua form diisi, ambil semua data
            $poster = Poster::getDataPoster($request);
        }

        return view('poster', [
            'title' => 'Poster',
            'active' => 'poster',
            'poster' => $poster,
            'kategori' => $kategori
        ]);
    }
}