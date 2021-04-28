<?php

namespace App\View\Components\Form;

use App\Models\Postcode;
use App\Models\State;
use App\Models\Country;

use Illuminate\View\Component;

class AddressInput extends Component
{
    public  $key, $editable, $postcodes, $states, $countries;

    public function __construct($key, $editable = true, $postcodes, $states, $countries)
    {
        $this->key        = $key;
        $this->editable   = $editable;
        $this->postcodes  = $postcodes;
        $this->states     = $states;
        $this->countries  = $countries;
    }

    public function render()
    {
        return view('components.form.address-input', [

        ]);
    }
}
