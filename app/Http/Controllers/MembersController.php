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

    public function produk2()
    {
        return view ('pages.member.produk2');
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
        return view('pages.member.produk.homestay.cameron');
    }

    public function homestayCameronBooking()
    {
        return view('pages.member.produk.homestay.cameronBooking');
    }
}
