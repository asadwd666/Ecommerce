<?php


namespace App\Http\Controllers;
use App\Models\Product;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class testModel extends Controller
{
    function index(){
        if(auth()->user()->hasRole('admin')){
         return view('dashboard');
        }
      $data=  DB::table('products')->select()->get();

      return view('welcome',['data'=>$data]);

//      $user= DB::table('products')->get();
//  return view('dashboard',['user'=>$user]);;
       
    }
    //
}
