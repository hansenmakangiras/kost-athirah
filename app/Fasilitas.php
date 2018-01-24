<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    protected $table ='tbl_fasilitas';
    protected  $primaryKey = 'fasilitas_id';

    public function kamar(){
        return $this->belongsTo('App\Kamar','tipekamar_id')->withDefault();
    }

    public static function getFasilitasName($tipeid){
        if($tipeid === 0){
            return "-";
        }
        return Fasilitas::where('fasilitas_id','=',$tipeid)->first()->nama_fasilitas;
    }
}
