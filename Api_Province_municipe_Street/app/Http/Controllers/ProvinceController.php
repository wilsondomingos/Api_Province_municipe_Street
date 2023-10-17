<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Province;
use \App\Municipe;
use \App\Street;

use \DB;
class ProvinceController extends Controller
{


    public function province(){
   
        $Province = DB::table('province')
        ->select('province.*', 'province.provincia', 'province.id')
        ->get();
       //dd( $Province );




       $municipe = DB::table('municipe')
       
       ->join('province', 'province.id', '=','municipe.provincia_id')
       ->select('municipe.*', 'province.*')
       ->get();
      // dd( $municipe );
       $distrito = DB::table('street')
       ->join('municipe', 'municipe.id', '=','street.municipe_id')
       ->join('province', 'province.id', '=','municipe.provincia_id')
       ->select('street.*', 'municipe.*','province.*')
       ->get();
 //dd( $distrito );
        return view('Home',compact('Province','municipe','distrito'));
    }
}
