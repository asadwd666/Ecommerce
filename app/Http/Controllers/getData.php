<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class getData extends Controller
{
    //
    public function index(){
      $data=  DB::table('products')->select()->get();
      return view('welcome',['data'=>$data]);

    }
}
