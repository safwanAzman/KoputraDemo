<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AkkController extends Controller
{
    public function index()
    {
        return view ('pages.akk.index');
    }
}
