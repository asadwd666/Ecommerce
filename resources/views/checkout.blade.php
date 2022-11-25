<head>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>         
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

</head>
@auth

<x-app-layout >
                 
                 <a href="{{ url('getcartdata') }}" >
                   <span class="material-symbols-outlined" onclick="myfun()" style="float:right;margin-right:2rem;cursor:pointer">
                           shopping_cart
                   </span>
                   </a>
                   @if(Session::get('cart'))
                   <?php
                   $count=Session::get('cart')->totalQuantity;
                   ?>
                   <span class="text-danger float-end border-rounded  " style="z-index:-1;margin-right:-2.3rem;margin-top:-1.6rem;background-color:LightGray;border-radius:100%;transform:scale(0.5);padding:10px">
                   {{$count}}

                   </span>

                   @endif
                 
                                     
                 </x-app-layout>
                 @if(Session::has('message'))
                  <script>
                    alert('ok');
                   Swal.fire(
                      'done!',
                      'You have succesfully ordered .check your email for detail',
                      'success'
                    )
                  </script>
                 @endif
@php
$cart=Session::get('cart');


@endphp
        <div class="container ">
            <div style="width:50%;float:left">
            @foreach($cart->items as $data)

            <div class="card mt-4 flex-row justify-content-between " style="height:40vh;width:100%;" >
                 <div >
                    <img src="{{asset('uploads/'.$data['file'])}}" class="card-img-top" style="height:100%;width:200px;" alt="...">
                 </div>
                <div class="d-flex ">
                    <div class="card-body d-flex flex-md-column gap-5 ">
                        <h5 class="card-title  ">Product Name </h5>
                        <p class="card-text " style="opacity:0.9">{{$data['name']}}</p>
                    </div>
                    <div class="card-body d-flex flex-md-column gap-5">
                        <h5 class="card-title  ">Quantity </h5>
                        <p class="card-text ">{{$data['qty']}}</p>
                    </div>
                    <div class="card-body d-flex flex-md-column gap-5">
                        <a href="#" class="card-link">Amount </a>
                        <a href="#" class="card-link " >{{$data['totalamount']}}</a>
                    </div>
                    </div>
            </div>

            @endforeach
         
            </div>
            <div class="mx-2" style="float:left;width:40%">
              <div class=" " style="width:40rem !important">
                <!-- <div class="card-header">
                    Featured
                </div> -->
                <div class="card-body m-5 " >
                  <div class="flex gap-4 mt-2">
                    <span class="card-title "><b>Total Payable :</b></span>
                    @if(Session::has('cart'))
                 <input disabled style="border:none;background:none !important" id="total" value="{{Session::get('cart')->totalPrice}}" class="card-text mt-1">
                 @endif
                </div>
                <div class="flex gap-4 mt-2">
                    <span class="card-title "><b>Shipping Charges:</b></span>
                    <p> 10</p>
                </div>
                <div class="flex gap-4 mt-2">
                    <span class="card-title"><b>Discount</b>(10%)</span>
                    <span class="discount_price"></span>
                            @if(Session::has('cart'))
                            <script>
                                let price=$('#total').val();
                                let discount=price*10/100;
                              
                                $('.discount_price').text(discount);

                            </script>

                            @endif
                </div>
                <div class="flex gap-4 mt-2">
                    <span class="card-title"><b>Grand Total</b></span>
                    <span class="grand_total"></span>
                           <div class="success" style="display:none">
                           <script>
                                let totalprice=$('#total').val();
                                let calculate=Number(totalprice)+10-Number(discount);
                                $('.grand_total').text(calculate);
                                

                            </script>
                           </div>
                      

                        
                </div>
                <button type="submit"  class="btn btn-primary mt-5 confirm" style="background:blue">Confirm</button>
                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
             </div>
            </div>
        </div>

      
@endauth
<script>
     $(document).on('click','.confirm', function()
  { 
    var payable= $('#sum').text();
   var discountedval= $('.discount_price').text();
   var GrandTotal=$('.grand_total').text();
  console.log(payable);
    $.ajax({
      type: 'post',
      data: {
        "_token": "{{ csrf_token()}}",
        'payable':payable,
        'discountedval':discountedval,
        'GrandTotal':GrandTotal,

      },
      url: '{{url("confirm_cart")}}',
      dataType: 'json',
      async : false,   
      success: function(data) 
      {
        Swal.fire(
          'done!',
          'Your order has been placed kindly check your Email!',
          'success'
        );
        window.location="/";

        
      }
    });
  
});
</script>