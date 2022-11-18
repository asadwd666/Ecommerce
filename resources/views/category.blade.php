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

<div class="container-fluid w-100">
  <div class="leftbar  bg-secondary   text-light" style="width:10%;height:90%;margin-left:-0.8rem">
  <ul class="d-flex flex-col p-4 align-center justify-content-center p-b-4 h-100" style="gap:4rem ">
    <li style="margin-top:-8rem">
      <a href="{{url('dashboard')}}" class="">Home</a>
    </li>
    <li>
      <a href="{{url('Category')}}" class="active">Category</a>
    </li>
    <li>
      <a href="{{url('product')}}">Product</a>
    </li>
   
  </ul>

</div>
  


  <div class="main" style="width:90%">
  @if(session()->has('message'))
    <div class="alert alert-success w-25" style="position:absolute;left:15rem;top:10rem">
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





