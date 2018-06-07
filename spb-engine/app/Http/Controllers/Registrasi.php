<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Categori_divisi;
use DB;

class Registrasi extends Controller
{
    //


    public function __construct(){
      $this->middleware('guest');
    }
    
    public function index(){
      $kategori = Categori_divisi::all();

      return view('auth.register',compact('kategori'));
      // dd($categori);




    }
}
