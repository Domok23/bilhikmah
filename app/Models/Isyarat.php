<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Isyarat extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function searchData(Request $request)
    {
        $query = DB::table('isyarats');

        if ($request->cari) {
            $query->where('deskripsi', 'like', '%' . $request->cari . '%');
        }

        $results = $query->get();

        return $results;
    }
}
