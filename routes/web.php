<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testModel;
use App\Http\Controllers\addproduct;
use App\Http\Controllers\getData;
use App\Http\Controllers\cartController;





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
Route::get("cart/{id}",[cartController::class,'index']);
Route::post('adding_items',[addproduct::class,'index']);