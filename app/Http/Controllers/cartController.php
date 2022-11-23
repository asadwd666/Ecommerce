<?php

namespace App\Http\Controllers;
use DB;

use App\Cart;
use App\Models\Product;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class cartController extends Controller
{
 
    public function index(Request $request,$id){
        $data=DB::table('products')->where('id',$id)->get();
      
        return view ('cart',['data'=>$data]);
    }
    public function cart(Request $req,$id){
        if(Auth::id()){
          $user=auth()->user();
          $product=Product::find($id);
          $oldcart=Session::has('cart') ? Session::get('cart') : null;
          $cart=new Cart($oldcart);
          $cart->add($product,$product->id);
          $req->session()->put('cart',$cart,$product->name,$product->file);

         
        return redirect('/');
     
   
        } 
           return redirect('login');
    }
   
 
    public function show_cart_data(Request $request){
     
   $check=Session::get('cart');
  if(!Session::has('cart')){
    return back();
  }
  $oldcart=Session::get('cart');
  $cart=new Cart($oldcart);

  
      
   return view('showcart',['products'=>$cart->items,'totalPrice'=>$cart->totalPrice]);
    }
    public function RemoveCartItem(Request $request){
      
      $cart = Session::get('cart');
      unset($cart->items[$request->proId]);
      return response()->json([
        'success' => true
      ]);
  }
  public function checkout_data(Request $request){
  
   
      
        $quantity = $request->quantity;
    
        $cart=Session::get('cart');
        
      
      $price=$cart->items[$request->proId]['price'];
      $cart->items[$request->proId]['qty'] = $quantity;
      $totalamount=$price*$quantity;
      $cart->items[$request->proId]['totalamount']=$totalamount;
     
      

    
  }
    
   

  
}
