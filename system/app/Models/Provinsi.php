<?php

namespace App\Models;

use App\Models\Kabupaten;
use illuminate\Database\Eloquent\Factories\HasFactory;
use illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    protected $table = 'provinsi';

    function kabupaten(){
        return $this->hasMany(Kabupaten::class, 'provinsi_id');
    }
}