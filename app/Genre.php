<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    //
    //nama table
    protected $table = 'genre';

    //nama coloumn
    protected $fillable = [
        'nama'
    ];
}
