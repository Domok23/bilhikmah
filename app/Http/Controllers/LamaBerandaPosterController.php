<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Poster;
use Illuminate\Http\Request;

class BerandaPosterController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        $poster = Poster::all();

        return view('poster',[
            'title' => 'Poster',
            'action' => 'poster',
            'poster' => $poster,
            'kategori' => $kategori
        ]);
    }
}
