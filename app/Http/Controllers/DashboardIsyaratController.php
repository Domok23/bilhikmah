<?php

namespace App\Http\Controllers;

use App\Models\Isyarat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class DashboardIsyaratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $isyarat = Isyarat::all();

        return view('dashboard.isyarat.index', [
            'title' => 'Dashboard Bahasa Isyarat',
            'active' => 'isyarat',
            'isyarat' => $isyarat
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.isyarat.create', [
            'title' => 'Tambah Bahasa Isyarat',
            'active' => 'isyarat'
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
            'deskripsi' => 'unique:isyarats|required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $fileName = $this->generateRandomString();

            // Proses kompresi gambar dengan kualitas 80%
            $compressedImage = Image::make($image)->encode('jpg', 80);

            // Simpan gambar yang sudah dikompres
            $gambar = $fileName . '.jpg';
            Storage::put('public/gambar/' . $gambar, $compressedImage->stream());
        }

        $data = $validatedData;
        $data['gambar'] = $gambar ?? null;

        Isyarat::create($data);

        return redirect('/dashboard/isyarat')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Isyarat  $isyarat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $isyarat = Isyarat::find($id);

        return view('dashboard.isyarat.edit', [
            'title' => 'Edit Bahasa Isyarat',
            'active' => 'isyarat',
            'isyarat' => $isyarat
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Isyarat  $isyarat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'deskripsi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,webp|file|max:2048'
        ]);

        $isyarat = Isyarat::find($id);

        if (!$isyarat) {
            return redirect('/dashboard/isyarat')->with('error', 'Data tidak ditemukan');
        }

        $isyarat->deskripsi = $validatedData['deskripsi'];

        if ($request->hasFile('gambar')) {
            $gambarLama = $isyarat->gambar;
            if ($gambarLama) {
                Storage::delete('public/gambar/' . $gambarLama);
            }

            $image = $request->file('gambar');
            $fileName = $this->generateRandomString();

            // Proses kompresi gambar dengan kualitas 80%
            $compressedImage = Image::make($image)->encode('jpg', 80);

            // Simpan gambar yang sudah dikompres
            $gambarBaru = $fileName . '.jpg';
            Storage::put('public/gambar/' . $gambarBaru, $compressedImage->stream());

            $isyarat->gambar = $gambarBaru;
        }

        $isyarat->save();

        return redirect('/dashboard/isyarat')->with('success', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Isyarat  $isyarat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $isyarat = Isyarat::find($id);
        $isyarat->delete();

        if ($isyarat->gambar) {
            Storage::delete($isyarat->gambar);
        }

        return redirect('/dashboard/isyarat')->with('danger', 'Data berhasil dihapus');
    }

    function generateRandomString($length = 30)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}