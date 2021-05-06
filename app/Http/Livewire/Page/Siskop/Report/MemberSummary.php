<?php

namespace App\Http\Livewire\Page\Siskop\Report;

use Livewire\Component;

class MemberSummary extends Component
{

    public $type  = 'chart';
    public $data  = '';

    public function render()
    {
        return view('livewire.page.siskop.report.member-summary');
    }
}
