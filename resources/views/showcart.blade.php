<head>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
  @auth
                    
                    <x-app-layout>
                 

                  
                    </x-app-layout>

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

