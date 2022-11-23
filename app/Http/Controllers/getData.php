<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class getData extends Controller
{
    //
    public function index(){
      if(!Auth::user()){
      $data=  DB::table('products')->select()->get();
      return view('welcome',['data'=>$data]);
    } else{
      $data=  DB::table('products')->select()->get();
      return view('welcome',['data'=>$data]);
  } 
     

    }
}
