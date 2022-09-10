<?php

namespace App\Models;

use App\Models\Kecamatan;
use App\Models\Provinsi;
use illuminate\Database\Eloquent\Factories\HasFactory;
use illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    protected $table = 'kabupaten';

    function kecamatan(){
        return $this->hasMany(Kecamatan::class, 'kabupaten_id');
    }
    function provinsi(){
        return $this->belongsTo(Provinsi::class, 'provinsi_id');
    }
}