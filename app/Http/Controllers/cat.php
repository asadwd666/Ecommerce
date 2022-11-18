<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddCategoryRequest;
use App\Models\Category;
use App\Rules\NotNumber;

class cat extends Controller
{
  public function store(AddCategoryRequest $request){
    $validated = $request->validated();

  }
    public function addcategory(AddCategoryRequest $request){
   
   $category=new Category();
   $category->category_name=$request->category_name;
   $category->category_desc=$request->cat_desc;

  
  $category->save();
  
  return redirect('Category')->with('message','Category added successfully');
    }
}
