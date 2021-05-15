<?php

namespace App\Http\Controllers;
use App\Models\Transaksi;
use App\Models\Pemesanan;
use Illuminate\Http\Request;
class ChartController extends Controller
{
    function chart(){
        return view('frontend/chart');
    }
    function bayar(Request $request, $id_pemesanan){

        $Pemesanan = Pemesanan::find($id_pemesanan);
        $request->validate([
            'image' => 'mimes:jpg,jpeg,png|max:2048',
        ], [
            'image.max' => 'Ukuran file maksimal 5MB',
        ]);

        if($request->image !== null){
            $fileName = time().'.'.$request->image->extension();

            $request->image->move(public_path('images'), $fileName);

            $Pemesanan->image = $fileName;
            echo $fileName;
            echo $id_pemesanan;
        }



            $Pemesanan->status = 'Sedang DiProses';

            $Pemesanan->update();

        return redirect()->back()->with('success', 'Pembayaran Sukses');
    }
}
