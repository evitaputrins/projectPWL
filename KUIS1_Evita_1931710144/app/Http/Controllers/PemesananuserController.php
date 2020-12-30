<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemesanan;

class PemesananuserController extends Controller
{
    public function pemesananuser(){
        return view('Pemesananuser');
    }
    public function __construct()
    {
         $this->middleware('auth');
    }

    public function sendpemesanan(Request $request){
        Pemesanan::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'phone' => $request->phone,
            'tanggalpesan' => $request->tanggalpesan,
        ]);
        return redirect('/pemesananuser');
    }
}
