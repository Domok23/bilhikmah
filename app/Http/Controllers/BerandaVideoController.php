<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BerandaVideoController extends Controller
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
            $video = Video::searchData($request, ['cari' => $request->cari]);
        } elseif ($request->has('id')) {
            // Cek apakah ada nilai di form kategori
            $video = Video::getDataVideo($request, ['id' => $request->id]);
        } else {
            // Jika tidak ada kedua form diisi, ambil semua data
            $video = Video::getDataVideo($request);
        }

        return view('video', [
            'title' => 'Video',
            'active' => 'video',
            'video' => $video,
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $getAllVideo = Video::take(4)->get();
        $video = Video::getDataVideoById($id);

        return view('video-detail', [
            'title' => 'Video',
            'active' => 'video',
            'video' => $video,
            'getAllVideo' => $getAllVideo
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        //
    }
}
