<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class placesDB extends Model
{
    protected $table = 'places';
    protected $fillable = [
        'nama', 'username', 'password', 'unpassword', 'places_type',
        'nama_toko',
        'alamat_toko',
        'email',
        'nohp',
        'spesifikasitv',
        'smarttv',
        'places_type',
        'created_by', 'updated_by',
    ];
}
