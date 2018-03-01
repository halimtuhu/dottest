<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RajaOngkir;
use App\Province;
use App\City;

class TextController extends Controller
{
    public function index(){
      return view('index');
    }

    public function cariProvinsi(Request $request){
      $provinsi = Province::find($request->id);
      return view('provinsi', compact('provinsi'));
    }

    public function cariKota(Request $request){
      $kota = City::find($request->id);
      return view('kota', compact('kota'));
    }
}
