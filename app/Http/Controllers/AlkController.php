<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlkController extends Controller
{
    public function index()
    {
        return view ('pages.alk.index');
    }

    public function tolakpermohonan()
    {
        return view ('pages.alk.tolak-permohonan');
    }
}
