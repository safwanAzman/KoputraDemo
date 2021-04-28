<?php

namespace App\Http\Livewire\Cif\Individual;
use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Customer;

class Index extends Component
{
    use WithPagination;

    public $sortField = 'name';
    public $sortAsc = true;
    public $search = '';

    public function render()
    {
        return view('livewire.cif.individual.index',[
            'customers' => Customer::where('name','like',$this->search.'%')
                        ->where('customer_group_id', 1)
                        ->orderBy($this->sortField, ($this->sortAsc == true) ? 'asc' : 'desc')
                        ->paginate(10),
        ]);
    }
}
