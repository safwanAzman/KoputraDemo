<?php

namespace App\View\Components\dashboard;

use Illuminate\View\Component;

class InfoCard extends Component
{
    public $cardRoute;
    public $value;
    public $title;
    public $bg;
    public $iconbg;
    public $percentage;
    public $footerTitle;

    public function __construct($cardRoute,$value,$title,$bg,$iconbg,$percentage,$footerTitle)
    {
        $this->cardRoute = $cardRoute;
        $this->value = $value;
        $this->title = $title;
        $this->bg = $bg;
        $this->iconbg = $iconbg;
        $this->percentage = $percentage;
        $this->footerTitle = $footerTitle;
    }

    
    public function render()
    {
        return view('components.dashboard.info-card');
    }
}
