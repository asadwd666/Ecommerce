
    @foreach($data as $item)
        <div class="container" style=" display:flex;justify-content:space-between">
            <div>
                
            <img src="{{asset('/uploads/'.$item->file)}}" class="card-img-top" height="600px"  width="600px" alt="...">

            </div>
            <div style="align-self:center;margin-right:30rem;gap:2rem;display:flex;flex-direction:column">
            <div>
              <span><b> Product Name</b></h4> <span>{{$item->name}}</span>
              </div> 
              <div>
              <span><b> Price</b></h4> <span>100$</span>
              </div> 
              <div>
              <span><b> Quantity</b></h4> <input type="text" id="item" onkeyup="totalPrice()"  style="width:100px;padding:10px" value="1">
              </div> 
              <div>
              <span><b> Total Price</b></h4> <input type="text" value="100" id="total" style="width:100px;padding:10px" disabled>
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
