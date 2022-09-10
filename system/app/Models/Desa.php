<?php

namespace App\Models;

use App\Models\Kecamatan;
use illuminate\Database\Eloquent\Factories\HasFactory;
use illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    protected $table = 'desa';

    function kecamatan(){
        return $this->belongsTo(Kecamatan::class, 'kecamatan_id');
    }
}