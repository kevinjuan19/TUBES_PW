<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    //nama table
    protected $table = 'customer';

    //nama coloumn
    protected $fillable = [
        'nama',
        'alamat',
        'noTelp',
        'email'
    ];
}
