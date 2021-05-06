<?php

namespace App\Http\Livewire\Page\Siskop\Member;

use App\Models\Member;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search = '',$search_by='name';

    public function render()
    {
        return view('livewire.page.siskop.member.index',[
            'members' => Member::where($this->search_by,'LIKE',$this->search.'%')
                        ->where('type_id','<>',4)
                        ->orderBy($this->search_by,'asc')
                        ->paginate(8)
        ]);
    }
}
