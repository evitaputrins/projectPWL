<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemesanan;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use PDF;
class PemesananController extends Controller
{
    public function pemesanan(){
        $pemesanans = Pemesanan::all();
        return view('pemesanan',['pemesanans' => $pemesanans]);
    }
    public function add(){
        return view('addpemesanan');
    }
    public function create(Request $request){
        Pemesanan::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'phone' => $request->phone,
            'tujuan' => $request->tujuan,
            'tanggalpesan' => $request->tanggalpesan,
        ]);
        return redirect('/pemesananuser');
    }
    public function edit($id){
        $pemesanan = Pemesanan::find($id);
        return view('editpemesanan',['pemesanan'=>$pemesanan]);
    }
    public function update($id, Request $request){
        $pemesanan = Pemesanan::find($id);
        $pemesanan->nama = $request->nama;
        $pemesanan->alamat = $request->alamat;
        $pemesanan->tujuan = $request->tujuan;
        $pemesanan->tanggalpesan = $request->tanggalpesan;
           
        $pemesanan->save();
        return redirect('/pemesananuser');
    }
        public function delete($id){
        $pemesanan = Pemesanan::find($id);
        $pemesanan->delete();
        return redirect('/pemesananuser');
    }
    public function cetak_pdf(){
        $pemesanan = Pemesanan::all();
        $pdf = PDF::loadview('pemesanans_pdf',['pemesanan'=>$pemesanan]);
        return $pdf->stream();
    }
}