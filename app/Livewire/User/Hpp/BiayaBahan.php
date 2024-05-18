<?php

namespace App\Livewire\User\Hpp;

use App\Models\BiayaBahan as ModelsBiayaBahan;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class BiayaBahan extends Component
{

    public $namaBahan = "";
    public $hargaSatuan = 0;
    #[Reactive]
    public $productId = null;


    public function render()
    {
        $bahans = ModelsBiayaBahan::where('product_id', $this->productId)->get();
        $total = $bahans->sum('harga_satuan');
        return view('livewire.user.hpp.biaya-bahan',[
            'bahans' => $bahans,
            'total' => $total
        ]);
    }

    public function save()
    {

        if ($this->productId == null) {
            session()->flash('error', 'Pilih Product  Dulu');
        } else {
            $this->validate(
                [
                    'namaBahan' => 'required',
                    'hargaSatuan' => 'required'
                ]
            );

            ModelsBiayaBahan::create([
                'product_id' => $this->productId,
                'nama_bahan' => $this->namaBahan,
                'harga_satuan' => $this->hargaSatuan
            ]);

            session()->flash('success', 'Berasil ditambahkan');
            $this->resetFields();
        }
    }

    public function delete($id){
        ModelsBiayaBahan::find($id)->delete();
        session()->flash('success', 'Data dihapus');
    }

    private function resetFields()
    {
        $this->namaBahan = "";
        $this->hargaSatuan = 0;
    }
}
