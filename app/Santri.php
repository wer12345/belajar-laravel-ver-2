<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    protected $fillable = [
        'nama', 'umur', 'alamat', 'jenis_kelamin'
    ];
}
