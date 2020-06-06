<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class adsDB extends Model
{
    protected $table = 'ads';
    protected $fillable = [
        'judul_ads',
        'desc_ads', 'requester',
        'fileads', 'kategori', 'lama_kontrak', 'datefinished', 'coverimg', 'starteddate',
    ];
}
