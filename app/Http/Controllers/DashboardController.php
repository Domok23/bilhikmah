<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Isyarat;
use App\Models\Poster;
use App\Models\Video;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $isyarat = Isyarat::all();
        $artikel = Artikel::all();
        $poster = Poster::all();
        $video = Video::all();

        return view('dashboard.index',[
            'title' => 'Dashboard Admin',
            'active' => 'dashboard',
            'isyarat' => $isyarat,
            'artikel' => $artikel,
            'poster' => $poster,
            'video' => $video
        ]);
    }
}