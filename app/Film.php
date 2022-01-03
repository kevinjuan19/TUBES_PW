<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    //
    //nama table
    protected $table = 'film';

    //nama coloumn
    protected $fillable = [
        'judul',
        'sutradara',
        'durasi',
        'genre_id'

    ];
    public function genre(){
        return $this->belongsTo(Genre::class);
    }
}
