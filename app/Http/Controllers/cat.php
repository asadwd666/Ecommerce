<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Rules\NotNumber;
use Illuminate\Http\Request;
use App\Http\Requests\AddCategoryRequest;

class cat extends Controller
{
 
    public function addcategory(AddCategoryRequest $request){
      
      $validated = $request->validated();
  
   $category=new Category();
   $category->category_name=$request->category_name;
   $category->category_desc=$request->cat_desc;

  
  $category->save();
  
  return redirect('Category')->with('message','Category added successfully');
    }
    function view_category(){
      $categories=Category::all();
      return view('view_category',['categories'=>$categories]);
    }
    function delete_category(Request $request){
       $id=$request->id;
      //  dd($id);
     if(Product::where('category_id','=',$id)->count()>0){
      // dd($id);
      return back()->with('message','You cant delete this,coz its product exists. product should be deleted ist');
  

     }
    //  dd('not exist');
     Category::where('id',$id)->delete();

     return back()->with('message','succesfully deleted');
       

    }
    function update_category(Request $request){

  $id=$request->id;
  $name=$request->category_name;
  $desc=$request->category_desc;
  Category::where('id',$id)->update([
    'category_name'=>$name,
    'category_desc'=>$desc
  ]);
  return back()->with('update','succesfully updated');
    }
}
