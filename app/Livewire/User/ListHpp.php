<?php

namespace App\Livewire\User;

use App\Models\Product;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.sidebar', ['active' => 'list-hpp'])]
class ListHpp extends Component
{
    public function render()
    {
        $products = Product::where('user_id', auth()->user()->id)->with(['biaya_bahan', 'biaya_tenaga_kerja', 'biaya_overload'])->get();
        return view('livewire.user.list-hpp',[
            'products' => $products
        ]);
    }
}
