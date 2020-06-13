<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class boxofficeDB extends Model
{
    protected $table = 'boxoffice';
    protected $fillable = [
        'judul',
        'tahun_film',
        'file',
        'coverimg',
        'created_by', 'updated_by', 'kategori_utama', 'sub_kategori', 'sub_kategori2'
    ];
}
