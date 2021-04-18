<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Province;
use \DB;
class ProvinceController extends Controller
{
    public function index(){
   
        $Province = DB::table('province')
        ->select('province.*', 'province.provincia', 'province.id')
        ->get();
       // dd( $Province );
        return view('welcome',compact('Province'));
    }
}
