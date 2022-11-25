<?php

namespace App\Http\Controllers;
use DB;

use App\Cart;
use App\Models\Product;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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
                      $quantity=$cart->items[$id]['qty'];
                      $totalamount=$cart->items[$id]['price'];
                      $cart->items[$id]['totalamount']=$quantity*$totalamount;
               
                      
                      
                    
                  return back();
                
              
                    } 
                      return redirect('login');
                }
   
 
          public function show_cart_data(Request $request)
          {
           
                  $check=Session::get('cart');
                  
                  if(!Session::has('cart')){
                    return back();
                  }
                  $oldcart=Session::get('cart');
                  $cart=new Cart($oldcart);

                  
                      
                  return view('showcart',['products'=>$cart->items,'totalPrice'=>$cart->totalPrice]);
           }
          public function RemoveCartItem(Request $request)
          {
      
                    $cart = Session::get('cart');
                    unset($cart->items[$request->proId]);
                    $cart->totalQuantity=$cart->totalQuantity;
                 
                    return response()->json([
                      'success' => true
                    ]);
          }
           public function checkout_data_minus(Request $request)
           {
    
  
                  
                        $quantity = $request->quantity-1;
                    
                        $cart=Session::get('cart');
                        $cart->totalQuantity-=1;
                       
                       
                      
                      $totalpayable=$cart->totalpayable=$request->payable;

                    
                      $price=$cart->items[$request->proId]['price'];
                      $cart->items[$request->proId]['qty'] = $quantity;
                      $totalamount=$price*$quantity;
                      $cart->items[$request->proId]['totalamount']=$totalamount;
          }
          public function checkout_data(Request $request)
           {
    
                       $quantity = $request->quantity;
                       $product= Product::find($request->proId);
                       $stock=$product->quantity;
               
   
                       if($stock<$quantity){
        
                        return response()->json([
                          'success' => false
                        ]);
                       }
                       else
                       {
                          $cart=Session::get('cart');
                          $cart->totalQuantity+=1;  
                          $totalpayable=$cart->totalpayable=$request->payable;

                    
                          $price=$cart->items[$request->proId]['price'];
                          $cart->items[$request->proId]['qty'] = $quantity;
                          $totalamount=$price*$quantity;
                          $cart->items[$request->proId]['totalamount']=$totalamount;
                          return response()->json([
                            'success' => true
                          ]);
                       }
                        

          }
          public function checkout_items(){
           
            return view('checkout');
          }
          public function totalpayment(Request $request){
            if(Session::has('cart')){
             
              $cart=Session::get('cart');
              $cart->totalPrice=$request->payable;


            }
          }
          public function confirm_cart(Request $request){
            
              $email=auth()->user()->email;
               $cart=Session::get('cart');
               $cart->discount=$request->discountedval;
               $cart->grandtotal=$request->GrandTotal;
              $messageData=[];
              Mail::send('cart_mail',$messageData,function($message)use($email){
                $message->to($email)->subject('You have ordered these items');
              })  ;
              Session::forget('cart');
              return response()->json([
                'success' => true
              ]);
              
          }
    
   

  
}
