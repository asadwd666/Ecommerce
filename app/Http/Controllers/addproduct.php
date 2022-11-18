<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;
use App\Models\Product;


class addproduct extends Controller
{
    //

    public function index(Request $request){

        // dd($request->all());
    
        $data = new Product;
        $data->name=$request->product_name;
        $data->category=$request->category;
        $category_name=$request->category;
    
        $model = Category::where('category_name', '=',$category_name)->firstOrFail();
        // dd($model->id);
        $data->category_id=$model->id;
        $fileName =$request->product_img->getClientOriginalName();
        $request->product_img->move(public_path('uploads'), $fileName);
        $data->file=$request->product_img->getClientOriginalName();
        $data->price=$request->price;
        $data->quantity= $request->product_quantity;
            
        $data->description= $request->product_dsc;
        // $abc=$request->product_img->getClientOriginalName();
        // dd($abc);
        $data->save();
       

return back()->with('success','succesfully added');
    }
    public function getCategory(){
        $categories=Category::with('products')->get();
        // foreach($categories as  $category){
        //     foreach($category->products as $product){
        //         dump($product->description);
        //     }
        // }
        // dd($category->products);
       return view('product',['categories'=>$categories]);
    }
}
