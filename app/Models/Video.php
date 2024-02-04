<?php

namespace App\Models;

use Facade\Ignition\QueryRecorder\Query;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function getDataVideo(Request $request)
    {
        // Using Query Builder
        $query = DB::table('videos')
            ->leftJoin('kategoris', 'kategoris.id', '=', 'videos.id_kategori')
            ->select(
                'videos.*',
                DB::raw('kategoris.judul as judul_kat')
            );

        if ($request->id) {
            $query->where('kategoris.id', $request->id);
        }

        return $query->paginate(6);
    }

    public static function getDataVideoById($id)
    {
        return DB::table('videos')
            ->leftjoin('kategoris', 'kategoris.id', '=', 'videos.id_kategori')
            ->select(
                'videos.*',
                'kategoris.judul as judul_kat',
            )
            ->where('videos.id', $id)
            ->first();
    }

    public static function searchData(Request $request)
    {
        $query = DB::table('videos')
            ->leftJoin('kategoris', 'kategoris.id', '=', 'videos.id_kategori')
            ->select(
                'videos.*',
                DB::raw('kategoris.judul as judul_kat')
            );

        if ($request->cari) {
            $query->where('videos.judul', 'like', '%' . $request->cari . '%')
                ->orWhere('videos.deskripsi', 'like', '%' . $request->cari . '%');
        }

        return $query->paginate(6);
    }
}