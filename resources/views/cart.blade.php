
               @auth
               <x-app-layout>
               
                  
                    </x-app-layout>
                    @endauth
              
    
    @foreach($data as $item)
        <div class="container" style=" display:flex">
            <div style="flex:1">
                
            <img src="{{asset('/uploads/'.$item->file)}}" class="card-img-top my-4" width="90%" style="height:500px;margin-top:2rem"  alt="...">

            </div>
            <div style="flex:1;margin-left:20px;margin-top:200px;display:flex;gap:2rem;flex-direction:column" >
               <div>
              <span><b> Product Name</b></h4> <span>{{$item->name}}</span>
              </div> 
              <div>
              <span><b> Price</b></h4> <span>$100</span>
              </div> 
              <div>
              <span><b> Quantity available</b></h4> <span>{{$item->quantity}}</p>
              </div> 
              <div>
              <span><b> Description</b></h4> <span>{{$item->description}}</p>
              </div> 
              <div>
              </div> 
            
            </div>
        </div>
        @endforeach
     
<script>
   
    let total=document.getElementById('total');
    console.log(total);
    function totalPrice(){
let item=document.getElementById('item').value;
console.log(item);


total.setAttribute("value",item*100);

    }
</script>
