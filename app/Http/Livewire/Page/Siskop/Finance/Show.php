<?php

namespace App\Http\Livewire\Page\Siskop\Finance;

use Livewire\Component;

class Show extends Component
{
    public $uuid;

    public function render()
    {
        return view('livewire.page.siskop.finance.show',[
            'account_no' => $this->uuid == 1 ? '1001026199': '1001026203'
        ]);
    }
}
