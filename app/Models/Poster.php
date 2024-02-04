<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Poster extends Model
{
    use HasFactory;
    protected $guarded = [];


    public static function getDataPoster(Request $request)
    {
        // Using Query Builder
        $query = DB::table('posters')
            ->leftJoin('kategoris', 'kategoris.id', '=', 'posters.id_kategori')
            ->select(
                'posters.*',
                DB::raw('kategoris.judul as judul_kat')
            );

        if ($request->id) {
            $query->where('kategoris.id', $request->id);
        }

        return $query->paginate(10);
    }

    public static function getDataPosterById($id)
    {
        return DB::table('posters')
            ->leftjoin('kategoris', 'kategoris.id', '=', 'posters.id_kategori')
            ->select(
                'posters.*',
                'kategoris.judul as judul_kat',
            )
            ->where('posters.id', $id)
            ->first();
    }

    public static function searchData(Request $request)
    {
        $query = DB::table('posters')
            ->leftJoin('kategoris', 'kategoris.id', '=', 'posters.id_kategori')
            ->select(
                'posters.*',
                DB::raw('kategoris.judul as judul_kat')
            );

        if ($request->cari) {
            $query->where('posters.judul', 'like', '%' . $request->cari . '%')
                ->orWhere('posters.deskripsi', 'like', '%' . $request->cari . '%');
        }

        return $query->paginate(10);
    }
}
