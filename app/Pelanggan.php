<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = 'tbl_pelanggan';
    protected $primaryKey = 'pelanggan_id';

    public function reservasi(){
        return $this->belongsTo('App\Reservasi');
    }
}
