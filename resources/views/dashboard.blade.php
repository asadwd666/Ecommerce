<head>
  <style>
    *{
      margin:0;
      padding:0;
    }
    .active{
      
      border-bottom:2px solid pink;

    }
  </style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<x-app-layout>
   
</x-app-layout>
<div class="container-fluid ">
<div class="leftbar   bg-secondary   text-light" style="width:10%;float:left;margin-left:-1.3rem;">
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
  <div class="main" style="width:90%"></div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
