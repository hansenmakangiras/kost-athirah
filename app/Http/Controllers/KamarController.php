<?php

namespace App\Http\Controllers;

use App\Fasilitas;
use App\Kamar;
use App\Layanan;
use App\TipeKamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kamar = Kamar::with('tipekamar','layanan','fasilitas')->get();
        $tipekamar =  Kamar::has('fasilitas')->get();
        $layanan =  Kamar::find(1)->layanan;
        $fasilitas =  Kamar::find(1)->fasilitas;
        //\Kint::dump($tipekamar);exit();
        $title = 'Detail Kamar';
        return view('kamar.index',compact('kamar','title','tipekamar','fasilitas','layanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kamar = new Kamar;
        $layanan = Layanan::all();
        $fasilitas = Fasilitas::all();
        $tipeKamar = TipeKamar::all();
        
        return view('kamar.create',compact('kamar','layanan','fasilitas','tipeKamar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'no_kamar' => 'required',
            'fasilitas_id' => 'required|integer',
            'layanan_id' => 'required|integer',
            'tipekamar_id' => 'required|integer',
            'luas' => 'required|integer|exists:tipe_kamar, tipekamar_id',
            'lantai' => 'required|string',
            'kapasitas' => 'required',
            'harga_harian' => 'required',
            'harga_mingguan' => 'required',
            'harga_bulanan' => 'required',
            'harga_tahunan' => 'required',
            'deskripsi' => 'required',
        ]);

        Kamar::create([
            'tipekamar_id' =>$request->tipekamar_id,
            'layanan_id' =>$request->layanan_id,
            'fasilitas_id' =>$request->fasilitas_id,
            'no_kamar' =>$request->no_kamar,
            'luas' =>$request->luas,
            'lantai' =>$request->lantai,
            'kapasitas' =>$request->kapasitas,
            'harga_harian' =>$request->harga_harian,
            'harga_mingguan' =>$request->harga_mingguan,
            'harga_bulanan' =>$request->harga_bulanan,
            'harga_tahunan' =>$request->harga_tahunan,
            'deskripsi' =>$request->deskripsi,
        ]);

        return redirect('kamar/index')->with('Success','Data kamar berhasil tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
