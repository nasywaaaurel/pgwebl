<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        return view('berita'); // atau sesuaikan dengan nama view kamu
    }
}
