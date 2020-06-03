<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class placesDB extends Model
{
    protected $table = 'places';
    protected $fillable = [
        'nama',
        'nama_toko',
        'alamat_toko',
        'email',
        'nohp',
        'spesifikasitv',
        'smarttv',
        'created_by', 'updated_by',
    ];
}
