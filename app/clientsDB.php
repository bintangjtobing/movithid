<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientsDB extends Model
{
    protected $table = 'clients';
    protected $fillable = [
        'clients_name',
        'phone',
        'email',
        'deskripsi',
        'namausaha',
        'username',
        'password',
        'created_by', 'updated_by',
        'unpassword',
    ];
}
