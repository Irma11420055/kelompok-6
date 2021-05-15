<?php

namespace App\Http\Controllers;

use App\Models\BukuModel;
use App\Models\KategoriBukuModel;
use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function index()
    {
        $bukus = BukuModel::all();
        return view('administrator.buku.index')->with('bukus', $bukus);

    }
    function detailBuku($id){
        $bukus = DB::table('buku_models')->where('id','=',$id)
        ->get();
        return view('frontend/detailBuku')->with('bukus',$bukus);
    }
    function pesanBuku($id){
        $bukus = DB::table('buku_models')->where('id','=',$id)
        ->get();
        return view('frontend/chart')->with('bukus',$bukus);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoris = KategoriBukuModel::all();
        return view('administrator.buku.tambah')->with('kategoris', $kategoris);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul_buku' => 'required',
            'kategori_buku' => 'required',
            'harga_buku' => 'required',
            'penulis_buku' => 'required',
            'penerbit_buku' => 'required',
            'tahun_terbit' => 'required',
            'gambar_buku' => 'required|mimes:jpg,jpeg,png|max:2048',
            'deskripsi_buku' => 'required'
        ], [
            'judul_buku.required' => 'Judul Buku tidak boleh kosong',
            'kategori_buku.required' => 'Kategori Buku tidak boleh kosong',
            'harga_buku.required' => 'Harga Buku tidak boleh kosong',
            'penulis_buku.required' => 'Penulis Buku tidak boleh kosong',
            'penerbit_buku.required' => 'Penerbit Buku tidak boleh kosong',
            'tahun_terbit.required' => 'Tahun Terbit tidak boleh kosong',
            'gambar_buku.required' => 'Gambar Buku tidak boleh kosong',
            'gambar_buku.mimes' => 'Hanya boleh file dengan format JPG / PNG',
            'gambar_buku.max' => 'Ukuran file maksimal 2MB',
            'deskripsi_buku.required' => 'Deskripsi Buku tidak boleh kosong',
        ]);

        $fileName = time().'.'.$request->gambar_buku->extension();

        $request->gambar_buku->move(public_path('images'), $fileName);

        $buku= new BukuModel;

        $buku->judul_buku = $request->judul_buku;
        $buku->kategory_id = $request->kategori_buku;
        $buku->harga_buku = $request->harga_buku;
        $buku->deskripsi_buku = $request->deskripsi_buku;
        $buku->penulis_buku = $request->penulis_buku;
        $buku->penerbit_buku = $request->penerbit_buku;
        $buku->tahun_terbit = $request->tahun_terbit;
        $buku->gambar_buku = $fileName;

        $buku->save();

        return redirect('/admin/data-buku');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $buku = BukuModel::find($id);
        return view('administrator.buku.detail')->with('buku', $buku);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategoris = KategoriBukuModel::all();
        $buku = BukuModel::find($id);
        return view('administrator.buku.edit')->with('kategoris', $kategoris)->with('buku', $buku);
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
        $request->validate([
            'judul_buku' => 'required',
            'harga_buku' => 'required',
            'penulis_buku' => 'required',
            'penerbit_buku' => 'required',
            'tahun_terbit' => 'required',
            'gambar_buku' => 'mimes:jpg,jpeg,png|max:2048',
            'deskripsi_buku' => 'required'
        ], [
            'judul_buku.required' => 'Judul Buku tidak boleh kosong',
            'harga_buku.required' => 'Harga Buku tidak boleh kosong',
            'penulis_buku.required' => 'Penulis Buku tidak boleh kosong',
            'penerbit_buku.required' => 'Penerbit Buku tidak boleh kosong',
            'tahun_terbit.required' => 'Tahun Terbit tidak boleh kosong',
            'gambar_buku.mimes' => 'Hanya boleh file dengan format JPG / PNG',
            'gambar_buku.max' => 'Ukuran file maksimal 2MB',
            'deskripsi_buku.required' => 'Deskripsi Buku tidak boleh kosong',
        ]);

        $buku= BukuModel::find($id);

        if($request->gambar_buku !== null){
            $fileName = time().'.'.$request->gambar_buku->extension();

            $request->gambar_buku->move(public_path('images'), $fileName);

            $buku->gambar_buku = $fileName;
        }

        if($request->kategori_buku !== null){
            $buku->kategory_id = $request->kategori_buku;
        }

        $buku->judul_buku = $request->judul_buku;
        $buku->harga_buku = $request->harga_buku;
        $buku->deskripsi_buku = $request->deskripsi_buku;
        $buku->penulis_buku = $request->penulis_buku;
        $buku->penerbit_buku = $request->penerbit_buku;
        $buku->tahun_terbit = $request->tahun_terbit;


        $buku->update();

        return redirect('/admin/data-buku');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku = BukuModel::find($id);
        $buku->delete();
        return redirect()->back();
    }

    public function order(Request $request, $id){
        $pemesanan = new Pemesanan;

        $pemesanan->id_buku = $id;
        $pemesanan->id_user = Auth::user()->id;
        $pemesanan->fullname = $request->fullname;
        $pemesanan->phone = $request->phone;
        $pemesanan->address=$request->address;
        $pemesanan->city = $request->city;
        $pemesanan->state = $request->state;
        $pemesanan->postal_code = $request->postal_code;
        $pemesanan->jumlah = $request->jumlah;
        $pemesanan->pengiriman = $request->pengiriman;
        $pemesanan->status = "Menunggu Pembayaran";
        $pemesanan->image = "-";
        $pemesanan->save();
        return redirect('/checkout');
    }
}
