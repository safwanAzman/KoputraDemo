<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view ('pages.dashboard');
    }

    public function index2()
    {
        return view ('pages.dashboard2');
    }
}
