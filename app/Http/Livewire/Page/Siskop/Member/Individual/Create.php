<?php

namespace App\Http\Livewire\Siskop\Member\Individual;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;

class Create extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.cif.individual.create', []);
    }

    public function createCustomer()
    {
        request()->session()->flash('createCustomer', 'Yay!');
        return redirect()->route('user.cif.individual.show', $this->customer->uuid);
    }
}
