<head>
  <style>
    .qty .count {
    color: #000;
    display: inline-block;
    vertical-align: top;
    font-size: 25px;
    font-weight: 700;
    line-height: 30px;
    padding: 0 2px
    ;min-width: 35px;
    text-align: center;
}
.qty .plus {
    cursor: pointer;
    display: inline-block;
    vertical-align: top;
    color: white;
    width: 30px;
    height: 30px;
    font: 30px/1 Arial,sans-serif;
    text-align: center;
    border-radius: 50%;
    }
    .qty .minus {
    cursor: pointer;
    display: inline-block;
    vertical-align: top;
    color: white;
    width: 30px;
    height: 30px;
    font: 30px/1 Arial,sans-serif;
    text-align: center;
    border-radius: 50%;
    background-clip: padding-box;
}
div {
    text-align: center;
}
.minus:hover{
    background-color: #717fe0 !important;
}
.plus:hover{
    background-color: #717fe0 !important;
}
span{
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
}
input{  
    border: 0;
    width: 2%;
}
nput::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
input:disabled{
    background-color:white;
}
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
  @auth
                    
                    <x-app-layout>
                 

                  
                    </x-app-layout>
                    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
    </tr>
  </thead>
  <tbody>
  @if(Session::has('cart'))
@php
$i=0;
@endphp
@foreach($products as $product)
    <tr>
      <th scope="row">{{$i++}}</th>
      <td>{{$product['name']}}</td>
      <td>{{$totalPrice}}</td>
      <td>{{$product['qty']}}

      <div class="qty mt-5">
                        <span class="minus bg-dark">-</span>
                        <input type="number" class="count{{$i++}}" name="qty" value="{{$product['qty']}}">
                        <button class="plus bg-dark" value="{{$product['qty']}}"  onclick="
                        let qa=document.getElementsByClassName(count{{$i-1}}).value;
                        console.log(qa)

                        ">+</button>
                    </div>
      </td>
    </tr>
    @endforeach
@endif

   
  </tbody>
</table>

<!-- {{ Session::get('name') }} -->
@if(Session::has('cart'))

@foreach($products as $product)

<div class="card mb-3 my-4 mx-3" style="max-width: 540px;height:200px">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{asset('uploads/'.$product['file'])}}" class="my-1" style="height:190px" alt="">
  
    </div>
    <div class="col-md-8" >
      <div class="card-body my-4">
        <div style="display:flex">
             <p class="h5">Price</p><span class="mx-2" style="opacity:0.8">{{$totalPrice}}</span>
        </div>
        <div style="display:flex">
             <h1 class="h5"> Name</h1><span class="mx-2" style="opacity:0.8">{{$product['name']}}</span>
        </div>
        <div style="display:flex">
             <h1 class="h5">Quantity</h1><p class="mx-3">{{$product['qty']}}</p>
        </div>
        <div style="display:flex">
             <h1 class="h5">Total Price</h1><p>{{$product['price']}}</p>
        </div>
        <div class=" mx-5" >
            <button class="btn btn-primary" onclick="checkout()" style="margin-left:8rem;margin-top:-2rem">Checkout</button>
        </div>
        
      </div>
    </div>
  </div>
</div>

@endforeach
@endif
@endauth

<script>
   function checkout(){
    Swal.fire({
  position: 'top-center',
  icon: 'success',
  title: 'Your work has been saved',
  showConfirmButton: false,
  timer: 1500
}) 
   }

  
  
</script>

