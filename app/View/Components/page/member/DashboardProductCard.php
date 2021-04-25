<?php

namespace App\View\Components\page\member;

use Illuminate\View\Component;

class DashboardProductCard extends Component
{
    public $type;
    public $title;
    public $description;
    public $description2;
    public $img;

    public function __construct($type, $title, $description, $description2 = NULL, $img)
    {
        $this->type = $type;
        $this->title = $title;
        $this->description = $description;
        $this->description2 = $description2;
        $this->img = $img;
    }

    public function render()
    {
        return view('components.page.member.dashboard-product-card');
    }
}
