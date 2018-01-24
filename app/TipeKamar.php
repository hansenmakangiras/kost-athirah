<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipeKamar extends Model
{
    protected $table ='tbl_tipe_kamar';
    protected  $primaryKey = 'tipekamar_id';

    public function kamar(){
        return $this->belongsTo('App\Kamar','tipekamar_id')->withDefault();
    }

    public static function getTipeKamar($tipeid){
        if($tipeid === 0){
            return "-";
        }

        return TipeKamar::where('tipekamar_id','=',$tipeid)->first()->tipe_kamar;
    }
}
