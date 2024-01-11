<?php

namespace App\Http\Controllers;

use App\Models\Isyarat;
use Illuminate\Http\Request;

class BerandaIsyaratController extends Controller
{
    public function index()
    {
        $isyarat = Isyarat::all();

        return view('isyarat',[
            'title' => 'Isyarat',
            'action' => 'isyarat',
            'isyarat' => $isyarat
        ]);
    }
}
