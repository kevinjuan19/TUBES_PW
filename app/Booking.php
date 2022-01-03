<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
    //nama table
    protected $table = 'booking';

    //nama coloumn
    protected $fillable = [
        'tglPesan',
        'harga',
        'studio_id',
        'customer_id'
    ];

    public function customer(){
        return $this->belongsTo(Customer::class);
    }
    public function Studio(){
        return $this->belongsTo(Studio::class);
    }
}
