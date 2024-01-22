<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Poster;
use App\Models\Video;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $video = Video::take(3)->get();
        $poster = Poster::take(3)->get();
        $artikel = Artikel::take(5)->get();

        return view('beranda',[
            'title' => 'Beranda',
            'active' => 'beranda',
            'video' => $video,
            'artikel' => $artikel,
            'poster' => $poster
        ]);
    }
}