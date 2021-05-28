<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NonMemberController extends Controller
{
    public function index()
    {
        return view ('pages.nonmember.dashboard');
    }

    public function dashboard2()
    {
        return view ('pages.nonmember.dashboard2');
    }

    public function mohon()
    {
        return view ('pages.nonmember.mohon');
    }

    public function salinanIc()
    {
        return view ('pages.nonmember.salinan.salinanIc');
    }

    public function suratTawaran()
    {
        return view ('pages.nonmember.salinan.suratLantikan');
    }

    public function firasat()
    {
        return view('pages.member.firasat.index');
    }
}
