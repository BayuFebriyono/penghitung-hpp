<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, HasUuids;

    protected $guarded = ['id'];
    public $incrementing = false;

    public function biaya_bahan()
    {
        return $this->hasMany(BiayaBahan::class);
    }

    public function biaya_tenaga_kerja(){
        return $this->hasMany(BiayaTenagaKerja::class);
    }

    public function biaya_overload(){
        return $this->hasMany(BiayaOverhead::class);
    }
}
