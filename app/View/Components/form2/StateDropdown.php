<?php

namespace App\View\Components\form2;

use Illuminate\View\Component;

class StateDropdown extends Component
{
    public $label;
    public $value;

    public function __construct($label, $value)
    {
        $this->label = $label;
        $this->value = $value;
    }
    public function render()
    {
        return view('components.form2.state-dropdown');
    }
}
