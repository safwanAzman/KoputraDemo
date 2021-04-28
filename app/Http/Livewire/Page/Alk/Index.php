<?php

namespace App\Http\Livewire\Page\Alk;

use Livewire\Component;

class Index extends Component
{
    public $d1, $d2, $d3, $d4, $d5, $itemid;

    public $dat = [1, 1, 1, 1, 1];

    public function approve($itemid)
    {
        $this->dat[$itemid] = 0;
        session()->flash('success', 'Pinjaman telah diterima!');
    }

    public function reject($itemid)
    {
        $this->dat[$itemid] = 0;
        session()->flash('success', 'Pinjaman telah ditolak!');
    }

    public function pass($itemid)
    {
        $this->dat[$itemid] = 0;
        session()->flash('success', 'Pinjaman telah dihantar ke Ahli Lembaga Koperasi 2!');
    }

    public function render()
    {
        return view('livewire.page.alk.index');
    }
}
