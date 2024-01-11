<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\Kategori;
use Illuminate\Http\Request;

class DashboardVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $video = Video::getDataVideo($request);

        return view('dashboard.video.index',[
            'title' => 'Video',
            'active' => 'video',
            'video' => $video
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();

        return view('dashboard.video.create',[
            'title' => 'Video',
            'active' => 'video',
            'kategori' => $kategori
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
        $validatedData = $request->validate([
            'id_kategori' => 'required',
            'judul' => 'required',
            'link' => 'required'
        ]);

        $data = $validatedData;

        Video::create($data);

        return redirect('/dashboard/video')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Kategori::all();
        $video = Video::getDataVideoById($id);

        return view('dashboard.video.edit',[
            'title' => 'video',
            'active' => 'video',
            'kategori' => $kategori,
            'video' => $video
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'id_kategori' => 'required',
            'judul' => 'required',
            'link' => 'required'
        ]);

        $video = Video::find($id);

        if (!$video) {
            return redirect('/dashboard/video')->with('error', 'Data tidak ditemukan');
        }

        $video->id_kategori = $validatedData['id_kategori'];
        $video->judul = $validatedData['judul'];
        $video->link = $validatedData['link'];

        $video->save();

        return redirect('/dashboard/video')->with('success', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video = Video::find($id);
        $video->delete();

        return redirect('/dashboard/video')->with('danger', 'Data berhasil dihapus');
    }
}
