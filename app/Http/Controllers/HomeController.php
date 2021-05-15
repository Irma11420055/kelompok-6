<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BukuModel;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home()
    {
        $bukus = BukuModel::all();
        return view('frontend/home')->with('bukus',$bukus);
    }
    public function adminHome(){
        return view('administrator/home');
    }
    public function komik(){
        $bukus = DB::table('buku_models')->where('kategory_id','LIKE','Komik')
        ->get();
        return view('frontend/komik')->with('bukus',$bukus);
    }
    public function novel(){
        $bukus = DB::table('buku_models')->where('kategory_id','LIKE','Novel')
        ->get();
        return view('frontend/novel')->with('bukus',$bukus);
    }
    public function ensiklopedia(){
        $bukus = DB::table('buku_models')->where('kategory_id','LIKE','Ensiklopedia')
        ->get();
        return view('frontend/ensiklopedia')->with('bukus',$bukus);
    }
    public function cerpen(){
        $bukus = DB::table('buku_models')->where('kategory_id','LIKE','Cerpen')
        ->get();
        return view('frontend/cerpen')->with('bukus',$bukus);
    }
    public function dongeng(){
        $bukus = DB::table('buku_models')->where('kategory_id','LIKE','Dongeng')
        ->get();
        return view('frontend/dongeng')->with('bukus',$bukus);
    }
    public function biografi(){
        $bukus = DB::table('buku_models')->where('kategory_id','LIKE','Biografi')
        ->get();
        return view('frontend/biografi')->with('bukus',$bukus);
    }
    public function contact(){
        return view('frontend/contact');
    }
    public function about(){
        return view('frontend/about');
    }
}
