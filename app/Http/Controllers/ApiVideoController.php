<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class ApiVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Mendapatkan data artikel tanpa pagination
        $videoData = Video::getAllDataVideo($request)->toArray();

        return response()->json([
            'video' => $videoData
        ], 200);
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
        $video = Video::create([
            'id_kategori' => $request->id_kategori,
            'judul' => $request->judul,
            'link' => $request->link
        ]);

        return response()->json([
            'video' => $video
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        return response()->json([
            'video' => $video
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
        $video->id_kategori = $request->id_kategori;
        $video->judul = $request->judul;
        $video->link = $request->link;
        $video->save();

        return response()->json([
            'video' => $video
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        $video->delete();

        return response()->json([
            'message' => 'video deleted'
        ], 204);
    }
}