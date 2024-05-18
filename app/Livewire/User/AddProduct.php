<?php

namespace App\Livewire\User;

use App\Models\Product;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.sidebar', ['active' => 'product'])]

class AddProduct extends Component
{

    public $productName = '';
    public $deskripsi = '';
    public $productId = null;
    public $isEdit = false;

    public function render()
    {
        return view('livewire.user.add-product', [
            'products' => Product::all()
        ]);
    }

    public function save()
    {
        $this->validate([
            'productName' => 'required',
            'deskripsi' => 'required'
        ]);

        if (!$this->isEdit) {
            Product::create([
                'user_id' => auth()->user()->id,
                'product_name' => $this->productName,
                'description' => $this->deskripsi
            ]);
            session()->flash('success', 'Data ditambahakan');
        } else {
            Product::find($this->productId)
                ->update([
                    'product_name' => $this->productName,
                    'description' => $this->deskripsi
                ]);
            session()->flash('success', 'Data diubah');
        }


        $this->resetFields();
    }

    public function edit($id)
    {
        $this->isEdit = true;
        $this->productId = $id;
        $product = Product::find($id);
        $this->productName = $product->product_name;
        $this->deskripsi = $product->description;
    }

    public function delete($id){
        Product::find($id)->delete();
        session()->flash('success', 'Data dihapus');
    }

    private function resetFields()
    {
        $this->productName = '';
        $this->deskripsi = '';
        $this->productId = null;
        $this->isEdit = false;
    }
}
