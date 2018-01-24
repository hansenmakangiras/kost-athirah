<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    protected $table = 'tbl_reservasi';
    protected $primaryKey = 'reservasi_id';
    protected $fillable = [
        'tgl_masuk',
        'durasi_sewa',
        'status'
    ];

    public function pelanggans(){
        return $this->hasMany('App\Pelanggan','pelanggan_id');
    }
    
    public function kamar(){
        return $this->hasMany('App\Kamar','kamar_id');
    }

    public function layanan(){
        return $this->hasMany('App\Layanan','layanan_id');
    }

    public function fasilitas(){
        return $this->hasMany('App\Fasilitas','fasilitas_id');
    }
}
