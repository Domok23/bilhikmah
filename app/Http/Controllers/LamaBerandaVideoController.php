<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Video;
use Illuminate\Http\Request;

class BerandaVideoController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        $video = Video::all();

        return view('video',[
            'title' => 'Video',
            'action' => 'video',
            'video' => $video,
            'kategori' => $kategori
        ]);
    }

    public function show($id)
    {
        $getAllVideo = Video::take(3)->get();
        $video = Video::getDatavideoById($id);

        return view('video-detail',[
            'title' => 'Video',
            'action' => 'video',
            'video' => $video,
            'getAllVideo' => $getAllVideo
        ]);
    }
}
