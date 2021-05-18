<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NonMemberController extends Controller
{
    public function index()
    {
        return view ('pages.nonmember.dashboard');
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
}
