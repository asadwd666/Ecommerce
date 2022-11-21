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
<div class="leftbar   bg-secondary     text-light" style="width:10%;margin-left:-1.5rem;">
        <ul class="d-flex flex-col mt-2 ml-4" style="gap:1rem;height:88.5vh">
             <li class="ml-4 mt-2" >
               <a href="{{url('dashboard')}}" class="active">Home</a>
              </li>
              <li class="ml-4 mt-2">
                   <a href="{{url('Category')}}" class="">Category</a>
                </li>
            <li class="ml-4 mt-2">
               <a href="{{url('product')}}" class="">Product</a>
          </li>
   
        </ul>

    </div>
  <div class="main" style="width:90%"></div>
</div>
