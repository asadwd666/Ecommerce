<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p style="color:grey">Dear {{auth()->user()->name}} Thnku for visiting us . below is Your order detail</p>
@php
$cart=Session::get('cart');


@endphp
        <div class="container d-flex flex-column gap-2 ">
         
            @foreach($cart->items as $data)

             <div class="card mt-4 row m-4 " style="display:flex;justify-content-between;gap:5rem;margin-top:2rem !important" >
                 <div class="col-md-5">
                            <img src="{{asset('uploads/'.$data['file'])}}" class="card-img-top" style="height:100%;width:200px;" alt="...">
                </div>
                <div class="d-flex col-md-5 ">
                        <div class="card-body d-flex flex-md-column gap-5 ">
                            <h5 class="card-title  ">Product Name </h5>
                            <p class="card-text " style="opacity:0.9">{{$data['name']}}</p>
                        </div>
                        <div class="card-body d-flex flex-md-column gap-5">
                            <h5 class="card-title  ">Quantity </h5>
                            <p class="card-text ">{{$data['qty']}}</p>
                        </div>
                        <div class="card-body d-flex flex-md-column gap-5">
                            <h5 class="card-title">Amount </h5>
                            <p  class="card-text ">${{$data['totalamount']}}</p>
                        </div>
                </div>
             </div>

            @endforeach
          
         
            <div class="mx-2 mt-4" style="margin-top:3rem !important" >
              
             <div class="card-body m-5 " style="display:flex;flex-direction:column;gap:2rem !important" >
                    <div class="flex gap-4 mt-2">
                          <span class="card-title "><b>Total Payable :</b></span>
                           @if(Session::has('cart'))
                          <input disabled style="border:none;background:none !important" id="total" value="${{Session::get('cart')->totalPrice}}" class="card-text mt-1">
                           @endif
                    </div>
                    <div class="flex " style="display:flex gap:2rem !important">
                        <span class="card-title "><b>Shipping Charges:</b></span>
                        <span>$ 10</p>
                    </div>
                    <div class="flex gap-4 mt-2">
                        <span class="card-title"><b>Discount</b>(10%) :</span>
                        <span class="discount_price">${{Session::get('cart')->discount}}</span>
                            
                    </div>
                    <div class="flex gap-4 mt-2">
                        <span class="card-title"><b>Grand Total :</b></span>
                        <span class="grand_total">${{Session::get('cart')->grandtotal}}</span>
                
                    </div>
               
                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
        
            </div>
        </div>

      


  
</body>
</html>