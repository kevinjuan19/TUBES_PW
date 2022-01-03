<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studio extends Model
{
    //
    //nama table
    protected $table = 'studio';

    //nama coloumn
    protected $fillable = [
        'studio',
        'film_id'
    ];
    public function film(){
        return $this->belongsTo(Film::class);
    }

}
