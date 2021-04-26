<?php

namespace App\View\Components\table2;

use Illuminate\View\Component;

class TableHeader extends Component
{
    public $value;
    public $sort;
    public $livewire;

    public function __construct($value, $sort, $livewire)
    {
        $this->value = $value;
        $this->sort = $sort;
        $this->livewire = $livewire;
    }
    
    public function render()
    {
        return view('components.table2.table-header');
    }
}
