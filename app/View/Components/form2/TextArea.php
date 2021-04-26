<?php

namespace App\View\Components\form2;

use Illuminate\View\Component;

class TextArea extends Component
{
    public $value;
    public $label;
    public $title;
    
    public function __construct($value,$label,$title)
    {
        $this->value    = $value;
        $this->label    = $label;
        $this->title    = $title;
    }

    
    public function render()
    {
        return view('components.form2.text-area');
    }
}
