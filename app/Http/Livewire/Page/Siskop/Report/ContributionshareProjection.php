<?php

namespace App\Http\Livewire\Page\Siskop\Report;

use Livewire\Component;

class ContributionshareProjection extends Component
{   
    public $graph_type  = 'bar';
    public $rate        = 100;
    public $year        = 2;
    public $linear      = 'l';
    public $image       = 1;

    public function render()
    {
        if($this->graph_type == 'bar'){
            $this->rate        = 100;
            $this->year        = 5;
            $this->linear      = 'l';
            $this->image       = 1;
        }elseif($this->graph_type == 'line'){
            $this->rate        = 0.5;
            $this->year        = 5;
            $this->linear      = 'e';
            $this->image       = 2;
        }
        return view('livewire.page.siskop.report.contributionshare-projection');
    }
}
