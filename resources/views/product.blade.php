<head>
  <style>
    .active{
      
      border-bottom:2px solid pink;

    }
  
  </style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" !important rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<x-app-layout>

</x-app-layout>

<div class="container-fluid row ">
    <div class="leftbar   bg-secondary     text-light" style="width:10%;margin-left:-1.5rem;">
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
                        <li><a class="dropdown-item"  href="#">view Category</a></li>
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
                        <li><a class="dropdown-item"  href="#">view Product</a></li>
                    </ul>
                 </div>
 
                   
                </li>
           
   
        </ul>

    </div>
  
    

  <div class="main " style="width:90%" >

  @if(session()->has('message'))
    <div class="alert alert-success w-25 m-4" >
        {{ session()->get('message') }}
    </div>
@endif
<form class="row flex-col m-5 g-2 W-75 justify-content-center " enctype="multipart/form-data" method="post" action="{{url('adding_items')}}"  >
<h4 class="h4 text-grey"> Add Product</h4>
@csrf


  <div class="col-auto">
    <label for="product_name" class="">Name</label>
    <input type="text" value="{{old('product_name')}}" name="product_name"  class="form-control " style="border: 1px solid #ced4da !important;" placeholder="Product name here">
  </div>
  @error('product_name')
     <p class="text-danger"> {{$message}}</p>
      @enderror
 
  <div class="col-auto">
  <label for="product_name" class="">Category</label>

  <select class="form-select" aria-label="Default select example" name="category">
  <option selected>Choose Category</option>
  @foreach($categories as $category)

 {{$category}}

     <option value="{{$category->category_name}}">{{$category->category_name}}</option>
 
{{$category->id}}
@endforeach
  
</select>
  </div>
  @error('category')
     <p class="text-danger"> {{$message}}</p>
      @enderror
  
  <div class="mb-3">
  <label for="formFile" class="form-label">Product Photo</label>
  <input class="form-control" value="{{old('product_img')}}" name="product_img" style="border: 1px solid #ced4da !important;" type="file" id="formFile">
</div>
@error('product_img')
     <p class="text-danger"> {{$message}}</p>
      @enderror
<div class="mb-3">
  <label for="formFile" class="form-label">Price</label>
  <input type="text" value="{{old('price')}}" name="price" class="form-control" style="border: 1px solid #ced4da !important;" min="1"  id="formFile">
</div>
@error('price')
     <p class="text-danger"> {{$message}}</p>
      @enderror
<div class="mb-3">
  <label for="formFile" class="form-label">Quantity</label>
  <input type="text" value="{{old('product_quantity')}}" name="product_quantity" class="form-control" style="border: 1px solid #ced4da !important;"  id="formFile">
</div>
@error('product_quantity')
     <p class="text-danger"> {{$message}}</p>
      @enderror
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Description</label>
  <textarea class="form-control" value="{{old('product_dsc')}}"  name="product_dsc" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
@error('product_dsc')
     <p class="text-danger"> {{$message}}</p>
      @enderror
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3" style="background-color:blue">Add</button>
  </div>
  
</form>

</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

 
  <!-- <div class="container  " style="margin-top:-30rem;margin-left:14rem">
             <h4 class="h4 text-grey"> Add Product</h4>
             <div class="py-12">
        <div class="max-w-7xl mx-auto " style="width:12rem;">
          <form action="adding_items" method="post" enctype="multipart/form-data">
            @csrf
            <input type="text" class="form-control" name="product_name" placeholder="Product Name"><br><br>
            <input type="number" class="form-control" name="product_quantity" placeholder="Product Quantity"><br><br>
            <input type="file" name="product_img" class="form-control"><br><br>
            <textarea name="product_dsc" id="" class="form-control" cols="30" rows="10" placeholder="product Description"></textarea>
            <button type="submit" class="btn btn-primary" style="border:2px solid;border-radius:10px;padding:8px">Save</button>
          </form>
        </div>
    </div>

   </div>
 

</div> -->