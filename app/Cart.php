<?php

namespace App;

use App\Models\Product;
use Illuminate\Support\Facades\Session;

class Cart{
    public $items=null;
    public $totalQuantity=0;
    public $totalPrice=0;
    public $discount=0;
    public $grandtotal=0;
   
   
    public function __construct($oldcart){
        if($oldcart){
            $this->items=$oldcart->items;
            $this->totalQuantity=$oldcart->totalQuantity;
            $this->totalPrice=$oldcart->totalPrice;
            $this->discount=$oldcart->discount;
            $this->grandtotal=$oldcart->grandtotal;



           

        }
    }
    public function add($item,$id){
        $storeditem=['qty'=>0,'totalamount'=>$item->price,'price'=>$item->price,'item'=>$item,'name'=>$item->name,'file'=>$item->file];
        if($this->items){
                    if(array_key_exists($id,$this->items)){
                        $storeditem=$this->items[$id];
                    }
        }
        // dd('not okey');
        
        $product=Product::find($id);
       
        $ordered_quantity=$storeditem['qty'];
        $stock=$product->quantity;
        if($ordered_quantity>$stock){
            return back()->with('message','cart exist');
        }else{


        $storeditem['qty']++;
        

        $this->items[$id]=$storeditem;
        $this->totalQuantity++;
      
        return back()->with('success','succesfully added');
        }
    }
} 