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
<div class="container-fluid w-100">
  <div class="leftbar  bg-secondary   text-light" style="width:10%;margin-left:-0.8rem">
  <ul class="d-flex flex-col p-4 align-center justify-content-center p-b-4 h-100" style="gap:4rem ">
    <li style="margin-top:-8rem">
      <a href="{{url('dashboard')}}" class="active">Home</a>
    </li>
    <li>
      <a href="{{url('Category')}}">Category</a>
    </li>
    <li>
      <a href="{{url('product')}}">Product</a>
    </li>
   
  </ul>
</div>
  <div class="main" style="width:90%"></div>
</div>
