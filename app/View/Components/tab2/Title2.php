<?php

namespace App\View\Components\tab2;

use Illuminate\View\Component;

class Title2 extends Component
{
    public $name;
    public $livewire = "";

    public function __construct($name, $livewire = "")
    {
        $this->name = $name;
        $this->livewire = $livewire;
    }
    public function render()
    {
        return view('components.tab2.title2');
    }
}
