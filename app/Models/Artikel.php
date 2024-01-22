<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function getDataArtikel(Request $request)
    {
        // Using Query Builder
        $query = DB::table('artikels')
            ->leftJoin('kategoris', 'kategoris.id', '=', 'artikels.id_kategori')
            ->select(
                'artikels.*',
                DB::raw('kategoris.judul as judul_kat')
            );

        if ($request->id) {
            $query->where('kategoris.id', $request->id);
        }

        return $query->get();
    }

    public static function getDataArtikelById($id)
    {
        return DB::table('artikels')
            ->leftjoin('kategoris', 'kategoris.id', '=', 'artikels.id_kategori')
            ->select(
                'artikels.*',
                'kategoris.judul as judul_kat',
            )
            ->where('artikels.id', $id)
            ->first();
    }
}