<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class CountryDropdown extends Component
{
    public $label;
    public $value;
    public $editable;
    public $livewire;

    public function __construct($label, $value, $editable = false,$livewire = "")
    {
        $this->label    = $label;
        $this->value    = $value;
        $this->editable  = $editable;
        $this->livewire = $livewire;
    }

    public function render()
    {
        return view('components.form.country-dropdown');
    }
}
