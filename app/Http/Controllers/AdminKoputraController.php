<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminKoputraController extends Controller
{
    public function index()
    {
        return view ('pages.adminkoputra.index');
    }

    public function tetapan()
    {
        return view ('pages.adminkoputra.tetapan');
    }
}
