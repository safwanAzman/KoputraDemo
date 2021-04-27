<?php

namespace App\View\Components\general;

use Illuminate\View\Component;

class ModalButton extends Component
{
    public $modalActive,
        $icon,
        $title,
        $description,
        $colour,
        $lButton,
        $rButton;

    public function __construct(
        $modalActive,
        $icon,
        $title,
        $description,
        $colour,
        $lButton,
        $rButton
    ) {
        $this->modalActive = $modalActive;
        $this->icon = $icon;
        $this->title = $title;
        $this->description = $description;
        $this->colour = $colour;
        $this->lButton = $lButton;
        $this->rButton = $rButton;
    }

    public function render()
    {
        return view('components.general.modal-button');
    }
}
