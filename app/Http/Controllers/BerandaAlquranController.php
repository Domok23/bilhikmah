<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class BerandaAlquranController extends Controller
{
    public function index()
    {
        $client = new Client(['verify' => false]);
        $url = "https://api.npoint.io/99c279bb173a6e28359c/data";
        $response = $client->request('GET', $url);
        $content = $response->getBody()->getContents();
        $data = json_decode($content, true);

        return view('alquran', [
            'title' => 'Al-quran',
            'active' => 'alquran',
            'data' => $data
        ]);
    }

    public function show($nomor)
    {
        $client = new Client(['verify' => false]);
        $url = "https://al-quran-8d642.firebaseio.com/surat/$nomor.json?print=pretty";
        $response = $client->request('GET', $url);
        $content = $response->getBody()->getContents();
        $data = json_decode($content, true);

        return view('alquran-detail', [
            'title' => 'Al-Quran',
            'active' => 'alquran',
            'data' => $data
        ]);
    }
}