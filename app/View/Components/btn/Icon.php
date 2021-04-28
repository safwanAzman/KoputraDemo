<?php

namespace App\View\Components\btn;

use Illuminate\View\Component;

class Icon extends Component
{
    public $href;
    public $target;
    public $label;
    public $color;
    public $livewire;

    public function __construct($href, $target, $label, $color, $livewire)
    {
        $this->href = $href;
        $this->target = $target;
        $this->label = $label;
        $this->color = $color;
        $this->livewire = $livewire;
    }

    public function render()
    {
        return view('components.btn.icon');
    }
}
