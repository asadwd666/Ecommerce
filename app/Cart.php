<?php

namespace App;
class Cart{
    public $items=null;
    public $totalQuantity=0;
    public $totalPrice=0;
   
   
    public function __construct($oldcart){
        if($oldcart){
            $this->items=$oldcart->items;
            $this->totalQuantity=$oldcart->totalQuantity;
            $this->totalPrice=$oldcart->totalPrice;
           

        }
    }
    public function add($item,$id){
        $storeditem=['qty'=>0,'totalamount'=>$item->price,'price'=>$item->price,'item'=>$item,'name'=>$item->name,'file'=>$item->file];
        if($this->items){
if(array_key_exists($id,$this->items)){
   return back();
    // $storeditem=$this->items[$id];
}
// dd('dhhjd');
        }
        // dd('not okey');
        $storeditem['qty']++;
        $storeditem['price']=$item->price*$storeditem['qty'];

        $this->items[$id]=$storeditem;
        $this->totalQuantity++;
        $this->totalPrice=$item->price;

    }
} 