<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Municipe;
use \DB;
class MunicipeController extends Controller
{
    
    public function municipio(){
   
        $municipe = DB::table('municipe')
       
        ->join('province', 'province.id', '=','municipe.provincia_id')
        ->select('municipe.*', 'province.*')
        ->get();
      
        return view('Home',compact('municipe'));
    }
}
