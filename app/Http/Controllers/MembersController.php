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

    public function tradingMakananTersedia()
    {
        return view('pages.member.produk.trading.makananTersedia');
    }

    public function tradingMakananTersediaBuy()
    {
        return view('pages.member.produk.trading.makananTersediaBuy');
    }

    public function homestayCameron()
    {
        # code...
    }

    public function homestayCameronBooking()
    {
        return view('pages.member.produk.homestay.cameronBooking');
    }
}
