<?php

namespace App\Livewire\User;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.sidebar',['active' => 'product'])]

class AddProduct extends Component
{

    public function render()
    {
        return view('livewire.user.add-product');
    }
}
