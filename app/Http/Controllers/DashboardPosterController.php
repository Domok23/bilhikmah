<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Poster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardPosterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $poster = Poster::getAllDataPoster($request);

        return view('dashboard.poster.index',[
            'title' => 'Dashboard Poster',
            'active' => 'poster',
            'poster' => $poster
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

        return view('dashboard.poster.create',[
            'title' => 'Tambah Poster',
            'active' => 'poster',
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
            'judul' => 'unique:posters|required',
            'deskripsi' => 'required',
            'id_kategori' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048'
        ]);

        $gambar = null;
        if ($request->hasFile('gambar')) {
            $fileName = $this->generateRandomString();
            $extention = $request->file('gambar')->extension();
            $gambar = $fileName . '.' . $extention;

            $request->file('gambar')->storeAs('public/gambar', $gambar);
        }

        $data = $validatedData;
        $data['gambar'] = $gambar;

        Poster::create($data);

        return redirect('/dashboard/poster')->with('success', 'Poster "' . $validatedData['judul'] . '" berhasil ditambah');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Poster  $poster
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Kategori::all();
        $poster = Poster::getDataPosterById($id);

        return view('dashboard.poster.edit',[
            'title' => 'Edit Poster',
            'active' => 'poster',
            'kategori' => $kategori,
            'poster' => $poster
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Poster  $poster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'id_kategori' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,webp|file|max:2048'
        ]);

        $poster = Poster::find($id);

        if (!$poster) {
            return redirect('/dashboard/poster')->with('error', 'Data tidak ditemukan');
        }

        $poster->id_kategori = $validatedData['id_kategori'];
        $poster->judul = $validatedData['judul'];
        $poster->deskripsi = $validatedData['deskripsi'];

        if ($request->hasFile('gambar')) {
            $gambarLama = $poster->gambar;
            if ($gambarLama) {
                Storage::delete('public/gambar/' . $gambarLama);
            }

            $fileName = $this->generateRandomString();
            $extension = $request->file('gambar')->extension();
            $gambarBaru = $fileName . '.' . $extension;

            $request->file('gambar')->storeAs('public/gambar', $gambarBaru);
            $poster->gambar = $gambarBaru;
        }

        $poster->save();

        return redirect('/dashboard/poster')->with('success', 'Poster "' . $validatedData['judul'] . '" berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Poster  $poster
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $poster = Poster::find($id);
        $judulPoster = $poster->judul;
        $poster->delete();

        if ($poster->gambar) {
            Storage::delete($poster->gambar);
        }

        return redirect('/dashboard/poster')->with('danger', 'Poster "' . $judulPoster . '" berhasil dihapus');
    }

    function generateRandomString($length = 30) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}