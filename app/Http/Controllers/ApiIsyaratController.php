<?php

namespace App\Http\Controllers;

use App\Models\Isyarat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ApiIsyaratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $isyarat = Isyarat::all();

        return response()->json([
            'status' => true,
            'message' => 'Data ditemukan',
            'isyarat' => $isyarat
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
            'deskripsi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $gambar = null;
        if ($request->hasFile('gambar')) {
            $fileName = $this->generateRandomString();
            $extension = $request->file('gambar')->extension();
            $gambar = $fileName . '.' . $extension;

            $request->file('gambar')->storeAs('public/gambar', $gambar);
        }

        $data = [
            'deskripsi' => $validatedData['deskripsi'],
            'gambar' => $gambar,
        ];

        $isyarat = Isyarat::create($data);

        if (!$isyarat) {
            return response()->json([
                'status' => false,
                'message' => 'Gagal membuat data isyarat'
            ], 500);
        }

        return response()->json([
            'status' => true,
            'message' => 'Data berhasil dibuat',
            'isyarat' => $isyarat
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Isyarat  $isyarat
     * @return \Illuminate\Http\Response
     */
    public function show(string $id)
    {
        $isyarat = Isyarat::find($id);
        if($isyarat) {
            return response()->json([
                'status' => true,
                'message' => 'Data ditemukan',
                'isyarat' => $isyarat
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
     * @param  \App\Models\Isyarat  $isyarat
     * @return \Illuminate\Http\Response
     */
    public function edit(Isyarat $isyarat)
    {
        //
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
        $isyarat = Isyarat::find($id);
        if (empty($isyarat)) {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }

        $validatedData = $request->validate([
            'deskripsi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Menyimpan data yang divalidasi ke dalam model Isyarat
        $isyarat->deskripsi = $validatedData['deskripsi'];

        if ($request->hasFile('gambar')) {
            $gambarLama = $isyarat->gambar;
            if ($gambarLama) {
                Storage::delete('public/gambar/' . $gambarLama);
            }

            $fileName = $this->generateRandomString();
            $extension = $request->file('gambar')->extension();
            $gambarBaru = $fileName . '.' . $extension;

            $request->file('gambar')->storeAs('public/gambar', $gambarBaru);
            $isyarat->gambar = $gambarBaru;
        }

        $isyarat->save();

        return response()->json([
            'status' => true,
            'message' => 'Data berhasil diupdate',
            'isyarat' => $isyarat
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Isyarat  $isyarat
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        $isyarat = Isyarat::find($id);
        if(empty($isyarat)){
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }

        $isyarat->delete();

        return response()->json([
            'status' => true,
            'message' => 'isyarat deleted'
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