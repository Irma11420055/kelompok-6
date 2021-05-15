<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\BukuModel;
use App\Models\Pemesanan;

class PemesananController extends Controller
{
    function orderNow(){
        return redirect()->route('home');
    }

    function daftarPemesanan(){
        $pemesanan = Pemesanan::select('*')->join("buku_models","pemesanans.id_buku","=","buku_models.id")->get();
        return view('administrator/buku/pemesanan')->with("pemesanan",$pemesanan);


    }

    function getPemesanan(){
        $pemesanan = Pemesanan::select('*')->join("buku_models","pemesanans.id_buku","=","buku_models.id")
        ->where("pemesanans.id_user","=",Auth::user()->id)->get();
        return view('frontend/pemesanan')->with("pemesanan",$pemesanan);
    }

    function detailPemesanan($id_pemesanan){
        $pemesanan = Pemesanan::select('*')->join("buku_models","pemesanans.id_buku","=","buku_models.id")
        ->where("pemesanans.id","=",$id_pemesanan)->get();
        return view('frontend/detailPemesanan')->with("pemesanan",$pemesanan);
    }

    function terima($id_pemesanan){
        $pemesanan = Pemesanan::find($id_pemesanan);
        $pemesanan->status = 'Terima';
        $pemesanan->update();
        return redirect()->back()->with('success', 'Diterima');
    }
    function tolak($id_pemesanan){
        $pemesanan = Pemesanan::find($id_pemesanan);
        $pemesanan->status = 'Tolak';
        $pemesanan->update();
        return redirect()->back()->with('success', 'Ditolak');
    }
}
