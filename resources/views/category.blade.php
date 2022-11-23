<head>
  <style>
    .active{
      
      border-bottom:2px solid pink;

    }
  </style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<x-app-layout>

</x-app-layout>

<div class="container-fluid row">
<div class="leftbar   bg-secondary     text-light" style="width:10%;margin-left:-1.5rem;">
        <ul class="d-flex flex-col mt-2 ml-4" style="gap:1rem;height:88.5vh">
        <li >
                 <a href="{{url('dashboard')}}" class="">Home</a>
              </li>
              <li>
                <div class="dropdown bg-transparent border-none mx-n2">
                    <button class="btn text-white dropdown-toggle" style="margin-left:-1rem" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                          Category
                    </button>
                    <ul class="dropdown-menu"  aria-labelledby="dropdownMenuButton1">
                        <li> <a href="{{url('Category')}}" class="dropdown-item" >Add Category</a> </li>        
                        <li><a class="dropdown-item" href="{{url('view_category')}}"  href="#">view Category</a></li>
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
  
  


  <div class="main" style="width:90%">
  @if(session()->has('message'))
    <div class="alert alert-success w-25" style="position:absolute;left:15rem;top:6rem">
        {{ session()->get('message') }}
    </div>
@endif
</div>

 
  <div class="container w-75 " style="margin-top:-30rem;margin-left:14rem">
  <h4 class="h4 text-grey"> Add Category</h4>
<form action="{{url('add_category')}}" method="post">
  @csrf
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Category Name</label>
        <input type="text" class="form-control" id="" name="category_name" placeholder="Sweater" >
      </div>
      @error('category_name')
     <p class="text-danger"> {{$message}}</p>
      @enderror
      <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Category Description </label>
       <textarea class="form-control" id="exampleFormControlTextarea1" name="cat_desc" rows="3" ></textarea>
       </div>
       @error('cat_desc')
     <p class="text-danger"> {{$message}}</p>
      @enderror
         <button class="btn btn-primary " style="background:blue" type="submit">Add Category</button>
   </div>
   </form>
   </div>
 

</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

