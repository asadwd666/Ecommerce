<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class cartController extends Controller
{
 
    public function index(Request $request,$id){
        $data=DB::table('products')->where('id',$id)->get();
 return view ('cart',['data'=>$data]);
    }
}
