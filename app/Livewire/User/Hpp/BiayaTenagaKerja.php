<?php

namespace App\Livewire\User\Hpp;

use App\Models\BiayaTenagaKerja as ModelsBiayaTenagaKerja;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class BiayaTenagaKerja extends Component
{

    #[Reactive]
    public $productId;
    public $tenagaKerja = '';
    public $hargaSatuan = 0;

    public function render()
    {
        $tenagas = ModelsBiayaTenagaKerja::where('product_id', $this->productId)->get();
        return view('livewire.user.hpp.biaya-tenaga-kerja',[
            'tenagas' => $tenagas,
            'total' => $tenagas->sum('harga_satuan')
        ]);
    }

    public function save()
    {
        if (!$this->productId) {
            session()->flash('error', 'Pilih produk dulu');
        } else {
            $this->validate([
                'tenagaKerja' => 'required',
                'hargaSatuan' => 'required'
            ]);

            ModelsBiayaTenagaKerja::create([
                'product_id' => $this->productId,
                'tenaga_kerja' => $this->tenagaKerja,
                'harga_satuan' => $this->hargaSatuan
            ]);

            session()->flash('success', 'Data ditambahkan');
            $this->resetFields();
        }
    }

    public function delete($id)
    {
        ModelsBiayaTenagaKerja::find($id)->delete();
        session()->flash('success', 'Data dihapus');
    }

    private function resetFields()
    {
        $this->tenagaKerja = '';
        $this->hargaSatuan = 0;
    }
}
