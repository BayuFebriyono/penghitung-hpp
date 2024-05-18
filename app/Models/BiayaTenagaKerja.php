<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiayaTenagaKerja extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'biaya_tenaga_kerja';
    protected $guarded = [];
    public $incrementing = false;
}
