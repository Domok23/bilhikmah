<?php

namespace App\Http\Controllers;

use App\Models\Poster;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ApiPosterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Mengambil data poster tanpa data pagination
        $posterData = Poster::all()->toArray();

        // Mengembalikan respons JSON tanpa data pagination
        return response()->json([
            'poster' => $posterData
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
        $validatedData = $request->validate([
            'id_kategori' => 'required',
            'judul' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
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

        $poster = Poster::create($data);

        if (!$poster) {
            return response()->json([
                'status' => false,
                'message' => 'Gagal membuat data poster'
            ], 500);
        }

        return response()->json([
            'status' => true,
            'message' => 'Data berhasil dibuat',
            'poster' => $poster
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Poster  $poster
     * @return \Illuminate\Http\Response
     */
    public function show(string $id)
    {
        $poster = Poster::find($id);
        if($poster) {
            return response()->json([
                'status' => true,
                'message' => 'Data ditemukan',
                'poster' => $poster
            ], 200);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Poster  $poster
     * @return \Illuminate\Http\Response
     */
    public function edit(Poster $poster)
    {
        //
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
        $poster = Poster::find($id);
        if (empty($poster)) {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }

        $validatedData = $request->validate([
            'id_kategori' => 'required',
            'judul' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Menyimpan data yang divalidasi ke dalam model Poster
        $poster->id_kategori = $validatedData['id_kategori'];
        $poster->judul = $validatedData['judul'];

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

        return response()->json([
            'status' => true,
            'message' => 'Data berhasil diupdate',
            'poster' => $poster
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Poster  $poster
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        $poster = Poster::find($id);
        if(empty($poster)){
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }

        $poster->delete();

        return response()->json([
            'status' => true,
            'message' => 'poster deleted'
        ], 200);
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