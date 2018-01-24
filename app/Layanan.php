<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    protected $table ='tbl_layanan';
    protected  $primaryKey = 'layanan_id';

    public function kamar(){
        return $this->belongsTo('App\Kamar','tipekamar_id')->withDefault();
    }

    public static function getLayananName($tipeid){
        if($tipeid === 0){
            return "-";
        }
        return Layanan::where('layanan_id','=',$tipeid)->first()->nama_layanan;
    }
}
