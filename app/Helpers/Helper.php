<?php
/**
 * Created by PhpStorm.
 * User: Hansen
 * Date: 20/01/2018
 * Time: 14.54
 */

namespace app\Helpers;

class Helper
{
    public static function indonesian_date($timestamp = '', $date_format = 'l, j F Y') {
        if (trim ($timestamp) == '')
        {
            $timestamp = time ();
        }
        elseif (!ctype_digit ($timestamp))
        {
            $timestamp = strtotime ($timestamp);
        }
        # remove S (st,nd,rd,th) there are no such things in indonesia :p
        $date_format = preg_replace ("/S/", "", $date_format);
        $pattern = [
            '/Mon[^day]/','/Tue[^sday]/','/Wed[^nesday]/','/Thu[^rsday]/',
            '/Fri[^day]/','/Sat[^urday]/','/Sun[^day]/','/Monday/','/Tuesday/',
            '/Wednesday/','/Thursday/','/Friday/','/Saturday/','/Sunday/',
            '/Jan[^uary]/','/Feb[^ruary]/','/Mar[^ch]/','/Apr[^il]/','/May/',
            '/Jun[^e]/','/Jul[^y]/','/Aug[^ust]/','/Sep[^tember]/','/Oct[^ober]/',
            '/Nov[^ember]/','/Dec[^ember]/','/January/','/February/','/March/',
            '/April/','/June/','/July/','/August/','/September/','/October/',
            '/November/','/December/',
        ];
        $replace = ['Sen','Sel','Rab','Kam','Jum','Sab','Min',
            'Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu',
            'Jan','Feb','Mar','Apr','Mei','Jun','Jul','Ags','Sep','Okt','Nov','Des',
            'Januari','Februari','Maret','April','Juni','Juli','Agustus','Sepember',
            'Oktober','November','Desember',
        ];
        $date = date ($date_format, $timestamp);
        $date = preg_replace ($pattern, $replace, $date);
        return $date;
    }

    public static function indonesian_time($time, $time_format = 'h:i A')
    {
        return date_format(date_create($time), $time_format);
    }

    public static function getDistanceAndDuration($origin, $destination)
    {
        $data = \GoogleMaps::load('distancematrix')
            ->setParam ([
                'origins' => $origin,
                'destinations' => $destination,
                'mode' => 'DRIVING',
                'language' => 'ID'
            ])
            ->get('rows');

        $distance = $data['rows'][0]['elements'][0]['distance']['text'];
        $duration = $data['rows'][0]['elements'][0]['duration']['text'];
        $response = $duration.' - '.$distance;

        return $response;
    }

    public static function time2str($ts) {
        if(!ctype_digit($ts)) {
            $ts = strtotime($ts);
        }
        $diff = time() - $ts;
        if($diff == 0) {
            return 'now';
        } elseif($diff > 0) {
            $day_diff = floor($diff / 86400);
            if($day_diff == 0) {
                if($diff < 60) return 'Baru saja';
                if($diff < 120) return '1 menit yang lalu';
                if($diff < 3600) return floor($diff / 60) . ' menit yang lalu';
                if($diff < 7200) return '1 jam yang lalu';
                if($diff < 86400) return floor($diff / 3600) . ' jam yang lalu';
            }
            if($day_diff == 1) { return 'Kemarin'; }
            if($day_diff < 7) { return $day_diff . ' hari yang lalu'; }
            if($day_diff < 31) { return ceil($day_diff / 7) . ' minggu yang lalu'; }
            if($day_diff < 60) { return 'bulan lalu'; }
            return date('F Y', $ts);
        } else {
            $diff = abs($diff);
            $day_diff = floor($diff / 86400);
            if($day_diff == 0) {
                if($diff < 120) { return 'dalam semenit'; }
                if($diff < 3600) { return 'dalam ' . floor($diff / 60) . ' menit'; }
                if($diff < 7200) { return 'dalam sejam'; }
                if($diff < 86400) { return 'dalam ' . floor($diff / 3600) . ' jam'; }
            }
            if($day_diff == 1) { return 'Besok'; }
            if($day_diff < 4) { return date('l', $ts); }
            if($day_diff < 7 + (7 - date('w'))) { return 'minggu depan'; }
            if(ceil($day_diff / 7) < 4) { return 'in ' . ceil($day_diff / 7) . ' minggu'; }
            if(date('n', $ts) == date('n') + 1) { return 'bulan depan'; }
            return date('F Y', $ts);
        }
    }

    public static function rupiah($angka){

        $hasil_rupiah = "Rp " . number_format($angka,0,'.','.');
        return $hasil_rupiah;
    }

    public static function kekata($x) {
        $x = abs($x);
        $angka = array("", "satu", "dua", "tiga", "empat", "lima",
            "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
        $temp = "";
        if ($x <12) {
            $temp = " ". $angka[$x];
        } else if ($x <20) {
            $temp = kekata($x - 10). " belas";
        } else if ($x <100) {
            $temp = kekata($x/10)." puluh". kekata($x % 10);
        } else if ($x <200) {
            $temp = " seratus" . kekata($x - 100);
        } else if ($x <1000) {
            $temp = kekata($x/100) . " ratus" . kekata($x % 100);
        } else if ($x <2000) {
            $temp = " seribu" . kekata($x - 1000);
        } else if ($x <1000000) {
            $temp = kekata($x/1000) . " ribu" . kekata($x % 1000);
        } else if ($x <1000000000) {
            $temp = kekata($x/1000000) . " juta" . kekata($x % 1000000);
        } else if ($x <1000000000000) {
            $temp = kekata($x/1000000000) . " milyar" . kekata(fmod($x,1000000000));
        } else if ($x <1000000000000000) {
            $temp = kekata($x/1000000000000) . " trilyun" . kekata(fmod($x,1000000000000));
        }
        return $temp;
    }

    public static function terbilang($x, $style=4) {
        if($x<0) {
            $hasil = "minus ". trim(kekata($x));
        } else {
            $hasil = trim(kekata($x));
        }
        switch ($style) {
            case 1:
                $hasil = strtoupper($hasil);
                break;
            case 2:
                $hasil = strtolower($hasil);
                break;
            case 3:
                $hasil = ucwords($hasil);
                break;
            default:
                $hasil = ucfirst($hasil);
                break;
        }
        return $hasil;
    }
}