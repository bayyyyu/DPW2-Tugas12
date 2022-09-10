<?php

namespace App\Models;

use App\Models\Desa;
use App\Models\Kabupaten;
use illuminate\Database\Eloquent\Factories\HasFactory;
use illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $table = 'kecamatan';

    function desa(){
        return $this->hasMany(Desa::class, 'desa_id');
    }
    function kabupaten(){
        return $this->belongsTo(Kabupaten::class, 'kabupaten_id');
    }
}