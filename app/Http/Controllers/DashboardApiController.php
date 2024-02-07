<?php

namespace App\Http\Controllers;

class DashboardApiController extends Controller
{
    public function index()
    {
        return view('dashboard.api-docs', [
            'title' => 'Dokumentasi API Bil Hikmah',
            'active' => 'api-docs',
        ]);
    }
}