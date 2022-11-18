<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <style>
            .ancher{
                background-color:LightGray;
                color:white;
                text-decoration:none;
                padding:10px;
            }
            #card{
                cursor:pointer;

            }
            #card:hover{
                opacity:0.8;

            }
            
           
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
 
            .shadow{
                background-color:black;
                height:200vh;
            }
        </style>
    </head>
    <body class="antialiased">
<h1 class="text-danger">
@if(Session::has('message'))

<p class="alert alert-info">{{ Session::get('message') }}</p>
@endif
</h1>
        <div >
            @if (Route::has('login'))
                <div class="border p-0 m-0  row" style="width:100%"  >
                    @auth
                    
                    <x-app-layout>
                     


                    <a href="{{ url('getcartdata') }}" >

  
   

                    <span class="material-symbols-outlined" onclick="myfun()" style="float:right;cursor:pointer">
                            shopping_cart
                    </span>
                    </a>
                    @if(Session::get('cart'))
 
 <?php
$count=Session::get('cart')->totalQuantity;
 ?>
                    <span class="text-danger float-end border-rounded  " style="margin-right:-2.4rem;z-index:1;margin-top:-1.6rem;background-color:LightGray;border-radius:100%;transform:scale(0.5);padding:10px">
 {{$count}}

        </span>
       
        @endif

                  
                    </x-app-layout>
                   
                    @else
                    <!-- <div class="mb-4 my-2  py-2" > -->
                        <div style="display:flex;justify-content:space-between;height:15vh;">
                    <img src="{{asset('images/shop-bag.svg')}}" class="height:50px" style="" alt="" class="align-self-start" style="transform:scale(0.9)">
                    <div style="align-self:center;margin-right:4rem;">
                        <a href="{{ route('login') }}" style="text-decoration:none"  class="ancher text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" style="text-decoration:none"  class=" ancher ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                   
                        </div>
                      

                       
                    </div>
                    
                    @endauth
                </div>
        </div>
            @endif 
      
        <div class="row  my-5" style="width:100%">
            @foreach($data as $item)
                <div class="card col-auto mx-5 my-5 p-0 col-md-4"  style="width: 18rem;" >
                   <a href="{{ url('cart/'.$item->id)}}" class="col-md-4 p-0 m-0 card-img-top" >

                     <img src="{{asset('/uploads/'.$item->file)}}" id="card" height="300px" alt="" width="100%"  @auth style="height:300px" @endauth >
                    </a>
                    <div class="cardbody p-2">
                        <div class="card-title">{{$item->name}}
                        <span style="float:right;opacity:0.5">$ {{$item->price}}</span>
                        </div>
                       
                        <div>
                            <form action="{{url('addToCart',$item->id)}}" method="post">
                                @csrf
                                <button type="submit" id="cart" @auth style="background-color:blue" @endauth class="btn btn-primary">Add To Cart</button>
                            </form>
                        </div>
                        <!-- <a href="" class="btn btn-primary">Add to Cart</a> -->
                    </div>
                </div>
        
        
        @endforeach
        </div>

      
        
      <!-- Scrollable modal -->
<!-- Button trigger modal -->


<!-- Modal -->

<script>
  function  myfun(){
    let dialog=document.querySelector('.modal');
    dialog.style.display="block";
        console.log(dialog);
    }
    function  myfun2(){
    let dialog=document.querySelector('.modal');
    dialog.style.display="none";
      
    }
  

</script>
    
    </body>
</html>
