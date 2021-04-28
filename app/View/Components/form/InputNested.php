<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class InputNested extends Component
{
    public $label;
    public $value;
    public $type;
    public $livewire;
    public $editable;

    public function __construct($label, $value = "", $type = "text", $livewire = "", $editable = false)
    {
        $this->label        = $label;
        $this->value        = $value;
        $this->type         = $type;
        $this->livewire     = $livewire;
        $this->editable     = $editable;
    }

    public function render()
    {
        return view('components.form.input-nested');
    }
}
