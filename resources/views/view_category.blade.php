<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<x-app-layout>

</x-app-layout>

<div class="leftbar   bg-secondary   text-light" style="width:10%;float:left">
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
                        <li><a class="dropdown-item"  href="#">view Product</a></li>
                    </ul>
                 </div>
 
                   
                </li>
           
        </ul>

    </div>
    <center>
  <h3 class="h3 mt-5">View Category</h3>

    </center>
    <div style="width:80%;float:left;">
    @if(Session::has('message'))
<div class="alert alert-primary" role="alert">
{{session::get('message')}}
</div>
@endif
@if(Session::has('update'))
<div class="alert alert-primary" role="alert">
{{session::get('update')}}
</div>
@endif
    <table class="table mt-5 mx-3" id="body1" >


<thead>
  <tr>
    <th scope="col">#</th>
    <th scope="col">Category Name</th>
    <th scope="col">Description</th>
    <th>Actions</th>
</tr>
</thead>
<tbody id="body1" >
  @php
  $i=1;
  @endphp
  @foreach($categories as $category)

  <tr>
      <td>{{$i++}}</td>
    <td>{{$category->category_name}}</td>
    <td>{{$category->category_desc}}</td>
    <td>
      <div class="row gap-4">
 
<div class="col-md-1">
<button class="btn btn-secondary" onclick="hideAndDisplay()">Edit</button>

</div>
  
  <form action="{{url('delete_category')}}" onsubmit="return confirm('Do you really want to delete this data?');" method="post" class="col-md-1 " > 
      @csrf
      <button class="btn btn-secondary" >Delete</button>
  <input type="hidden" value="{{$category->id}}" name="id">

</form> 
  </div>
    </td>
   
  </tr>
@endforeach
 
 
</tbody>


</table>
<table class="table mt-5 mx-3" id="body2" style="display:none">


<thead>
  <tr>
    <th scope="col">#</th>
    <th scope="col">Category Name</th>
    <th scope="col">Description</th>
    <th>Actions</th>
</tr>
</thead>

<tbody >
  @php
  $i=1;
  @endphp
  @foreach($categories as $category)

  <tr>
    <form action="{{url('update_category')}}" method="post">
        @csrf
      <td>{{$i++}}</td>
      <td>
     <div class="row">
         <div class="col">
              <input type="text" name="category_name" class="form-control" style="border: 1px solid #ced4da !important; !important;" value="{{$category->category_name}}" placeholder="First name" aria-label="First name">
         </div>
         <input type="hidden" name="id" value="{{$category->id}}">
     </td>
     <td>
        
         <div class="col">
              <input type="text" name="category_desc" style="border: 1px solid #ced4da !important;" class="form-control" value="{{$category->category_desc}}" >
         </div>
     </td>
    </div>
    
    <td>
      
 

  
  
  <button class="btn btn-secondary" >update</button>


</form> 
  </div>
    </td>
   
  </tr>
@endforeach
 
 
</tbody>

</table>

    </div>
  

<script>
  function hideAndDisplay(){
   let body1=document.getElementById('body1');
   body1.style.display="none";
   let body2=document.getElementById('body2');
   body2.style.display="block";
   
  }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

