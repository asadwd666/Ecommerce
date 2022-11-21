<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testModel;
use App\Http\Controllers\addproduct;
use App\Http\Controllers\getData;
use App\Http\Controllers\cartController;
use App\Http\Controllers\cat;






/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [getData::class,'index']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [testModel::class,'index'])->name('dashboard');
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified','role:admin'
// ])->group(function () {
//     Route::get('/admin/dashboard', [testModel::class,'index'])->name('admin.dashboard');
// });
Route::post("addToCart/{id}",[cartController::class,'cart']);
//for getting image
Route::get("cart/{id}",[cartController::class,'index']);
// Route::get("getcartdata",[cartController::class,'getcartdata']);
Route::get("getcartdata",[cartController::class,'show_cart_data']);


Route::post('adding_items',[addproduct::class,'index']);
Route::get('product',[addproduct::class,'getCategory']);
Route::post('add_category',[cat::class,'addcategory']);
Route::get('view_category',[cat::class,'view_category']);
Route::get('Category',function(){
    return view('category');
});
Route::post('delete_category',[cat::class,'delete_category']);
Route::post('update_category',[cat::class,'update_category']);
