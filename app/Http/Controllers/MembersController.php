<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function index()
    {
        return view ('pages.member.index');
    }

    public function create()
    {
        return view ('pages.member.create');
    }

    public function produk()
    {
        return view ('pages.member.produk');
    }
}
