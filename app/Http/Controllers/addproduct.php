<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class addproduct extends Controller
{
    //

    public function index(Request $request){
        // $request->product_name;
        // $request->product_quantity;
        // $request->product_img;
        // $request->product_dsc;
     
      
            $name=$request->product_name;
          $quantity=  $request->product_quantity;
            
           $desc= $request->product_dsc;
        
        $fileName = $request->product_img->getClientOriginalName();
        $request->product_img->move(public_path('uploads'), $fileName);
DB::table('products')->insert([
    'name'=>$name,
    'quantity'=>$quantity,
    'description'=>$desc,
    'file'=>$fileName
]);

return back()->with('success','succesfully added');
    }
}
