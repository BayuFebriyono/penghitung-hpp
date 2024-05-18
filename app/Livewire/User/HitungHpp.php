<?php

namespace App\Livewire\User;

use App\Models\Product;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.sidebar',['active' => 'hitung-hpp'])]
class HitungHpp extends Component
{

    public $productId;

    public function render()
    {
        return view('livewire.user.hitung-hpp',[
            'products' => Product::where('user_id', auth()->user()->id)->get()->sortBy('product_name')
        ]);
    }


}
