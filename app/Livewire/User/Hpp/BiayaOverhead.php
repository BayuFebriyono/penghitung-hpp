<?php

namespace App\Livewire\User\Hpp;

use App\Models\BiayaOverhead as ModelsBiayaOverhead;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class BiayaOverhead extends Component
{

    #[Reactive]
    public $productId;
    public $komponen = '';
    public $hargaSatuan = 0;

    public function render()
    {
        $overheads = ModelsBiayaOverhead::where('product_id', $this->productId)->get();
        return view('livewire.user.hpp.biaya-overhead',[
            'overheads' => $overheads,
            'total' => $overheads->sum('harga_satuan')
        ]);
    }

    public function save()
    {
        if (!$this->productId) {
            session()->flash('error', 'Pilih produk dulu');
        } else {
            $this->validate([
                'komponen' => 'required',
                'hargaSatuan' => 'required'
            ]);

            ModelsBiayaOverhead::create([
                'product_id' => $this->productId,
                'komponen' => $this->komponen,
                'harga_satuan' => $this->hargaSatuan
            ]);

            session()->flash('success', 'Data ditambahkan');
            $this->resetFields();
        }
    }

    public function delete($id)
    {
        ModelsBiayaOverhead::find($id)->delete();
        session()->flash('success', 'Data dihapus');
    }

    private function resetFields()
    {
        $this->komponen = '';
        $this->hargaSatuan = 0;
    }
}
