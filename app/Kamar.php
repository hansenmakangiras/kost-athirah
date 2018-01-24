<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    protected $table ='tbl_detail_kamar';
    protected  $primaryKey = 'kamar_id';

    public function tipekamar(){
        return $this->hasMany('App\TipeKamar','tipekamar_id');
    }

    public function fasilitas(){
        return $this->hasMany('App\Fasilitas','fasilitas_id');
    }

    public function layanan(){
        return $this->hasMany('App\Layanan','layanan_id');
    }

    protected $fillable = [
        'no_kamar',
        'luas',
        'lantai',
        'kapasitas',
        'harga_harian',
        'harga_mingguan',
        'harga_bulanan',
        'harga_tahunan',
        'deskripsi'
    ];

}
