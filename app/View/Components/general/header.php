<?php

namespace App\View\Components\general;

use Illuminate\View\Component;

class header extends Component
{
    public $bgimg;
    public $title;
    
    public function __construct($bgimg,$title)
    {
        $this->bgimg = $bgimg;
        $this->title = $title; 
    }

    
    public function render()
    {
        return view('components.general.header');
    }
}
