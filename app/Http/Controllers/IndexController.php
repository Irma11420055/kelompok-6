<?php

namespace App\Http\Controllers;

use App\Models\BukuModel;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $buku = BukuModel::all();
        return view('frontend/index')->with('bukus', $buku);
    }
}
