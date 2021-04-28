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

    public function member_show($uuid)
    {
        return view ('pages.siskop.member.individual.show',[
            'uuid'=>$uuid,
        ]);
    }

    public function finance_index()
    {
        return view ('pages.siskop.finance.index');
    }

    public function finance_show($uuid)
    {
        return view ('pages.siskop.finance.show',[
            'uuid'=>$uuid,
        ]);
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

    public function listPositionContribution_report()
    {
        return view('pages.siskop.report.list-position-contribution');
    }

    public function contributionshare_projection()
    {
        return view('pages.siskop.report.contributionshare-projection');
    }

    public function member_summary()
    {
        return view('pages.siskop.report.member-summary');
    }

}
