<?php

namespace App\View\Components\general;

use Illuminate\View\Component;

class ModalButton extends Component
{
    public $modalActive,
        $title,
        $description,
        $iconColour,
        $draw,
        $colour,
        $lButton,
        $rButton,
        $alkCheck,
        $itemid;

    public function __construct(
        $modalActive,
        $title,
        $description,
        $iconColour,
        $draw,
        $colour,
        $lButton,
        $rButton,
        $alkCheck,
        $itemid
    ) {
        $this->modalActive = $modalActive;
        $this->title = $title;
        $this->description = $description;
        $this->iconColour = $iconColour;
        $this->draw = $draw;
        $this->colour = $colour;
        $this->lButton = $lButton;
        $this->rButton = $rButton;
        $this->alkCheck = $alkCheck;
        $this->itemid = $itemid;
    }

    public function render()
    {
        return view('components.general.modal-button');
    }
}
