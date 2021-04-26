<?php

namespace App\View\Components\general;

use Illuminate\View\Component;

class ModalPermohonan extends Component
{
    public $title;
    public $modalActive;
    public $modalSize;
    public $closeBtn;
    public $route;
    
    public function __construct($title,$modalActive,$modalSize ,$closeBtn ="yes",$route)
    {
        $this->title = $title;
        $this->modalActive = $modalActive;
        $this->modalSize = $modalSize;
        $this->closeBtn = $closeBtn;
        $this->route = $route;
    }

    
    public function render()
    {
        return view('components.general.modal-permohonan');
    }
}
