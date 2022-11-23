<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<x-app-layout>

</x-app-layout>
<div class="leftbar   bg-secondary     text-light" style="width:10%;float:left;height:100%;">
        <ul class="d-flex flex-col mt-2 ml-4" style="gap:1rem;">
             <li >
                 <a href="{{url('dashboard')}}" class="">Home</a>
              </li>
              <li>
                <div class="dropdown bg-transparent border-none mx-n2">
                    <button class="btn text-white dropdown-toggle" style="margin-left:-1rem" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                          Category
                    </button>
                    <ul class="dropdown-menu w-50" aria-labelledby="dropdownMenuButton1">
                        <li> <a href="{{url('Category')}}" class="dropdown-item" >Add Category</a> </li>        
                        <li><a class="dropdown-item"  href="{{url('view_category')}}">view Category</a></li>
                    </ul>
                 </div>
 
                   
                </li>
                <li>
                <div class="dropdown bg-transparent border-none mx-n2">
                    <button class="btn text-white dropdown-toggle" style="margin-left:-1rem" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                          Product
                    </button>
                    <ul class="dropdown-menu w-50" aria-labelledby="dropdownMenuButton1">
                        <li> <a href="{{url('product')}}" class="dropdown-item" >Add Product</a> </li>        
                        <li><a class="dropdown-item"  href="{{url('view_product')}}">view Product</a></li>
                    </ul>
                 </div>
 
                   
                </li>
           
   
        </ul>

    </div>
    <div class="m-5" style="width:80%;float:left">

    @if(Session::has('message'))
<div class="alert alert-primary" role="alert">
{{session::get('message')}}
</div>
@endif
        <table class="table" >
            <center><h3 class="h3">View Products</h3></center>
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Category</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
            <th scope="col">Actions</th>





            </tr>
        </thead>
        <tbody>
            @php 
            $i=1;
            @endphp
        @foreach($products as $product)

            <tr>
            <th scope="row">{{$i++}}</th>
            <td>{{$product->name}}</td>
            <td>{{$product->category}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->quantity}}</td>
            <td>{{$product->description}}</td>
           
            <td>
                <img src="{{asset('uploads/'.$product->file)}}" width="80px" alt="">
            </td>
            <td>
                <form action="{{url('delete_product')}}" method="post" onsubmit="return confirm('Are you sure You want to delete ?')">
                    @csrf
                    <input type="hidden" value="{{$product->id}}" name="id" >
                <button class="btn btn-secondary">Delete</button>
                </form>
            </td>


            </tr>
        
        @endforeach
        
        </tbody>
        </table>
    </div>