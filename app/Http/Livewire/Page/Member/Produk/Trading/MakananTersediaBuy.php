<?php

namespace App\Http\Livewire\Page\Member\Produk\Trading;

use Livewire\Component;

class MakananTersediaBuy extends Component
{
    public function buy()
    {
        session()->flash('message', 'Product successfully ordered! We will post your order as soon as possible.');
        return redirect()->to('/members/produk');
    }

    public function render()
    {
        return view('livewire.page.member.produk.trading.makanan-tersedia-buy');
    }
}
