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

    public function permohonan()
    {
        return view ('pages.adminkoputra.permohonan');
    }

    public function donepermohonan()
    {
        return view ('pages.adminkoputra.done-permohonan');
    }

    public function donepermohonan2()
    {
        return view ('pages.adminkoputra.done-permohonan2');
    }
}
