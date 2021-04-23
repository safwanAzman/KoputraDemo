<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiskopController extends Controller
{
    public function index()
    {
        return view ('pages.siskop.index');
    }

    public function member_index()
    {
        return view ('pages.siskop.member.index');
    }

    public function finance_index()
    {
        return view ('pages.siskop.finance.index');
    }

    public function firasat_index()
    {
        return view ('pages.siskop.firasat.index');
    }

    public function teller_index()
    {
        return view ('pages.siskop.teller.index');
    }

    public function report_index()
    {
        return view ('pages.siskop.report.index');
    }

}
