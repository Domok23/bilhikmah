<?php

namespace App\Http\Controllers;

use App\Models\Isyarat;
use Illuminate\Http\Request;

class BerandaIsyaratController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $isyarat = Isyarat::searchData($request, ['cari' => $request->cari]);
        } else {
            $isyarat = Isyarat::all();
        }

        return view('isyarat', [
            'title' => 'Isyarat',
            'active' => 'isyarat',
            'isyarat' => $isyarat
        ]);
    }
}
