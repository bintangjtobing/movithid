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
    ];
}
