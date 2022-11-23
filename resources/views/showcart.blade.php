<head>
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="jquery-3.6.0.min.js"></script>

  <style>
    .qty .count {
    color: #000;
    display: inline-block;
    vertical-align: top;
    font-size: 25px;
    font-weight: 700;
    line-height: 30px;
    padding: 0 2px
    ;min-width: 35px;
    text-align: center;
}
.table .head td{
  width:200px
}

div {
    text-align: center;
}


span{
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
}
input{  
    border: 0;
    width: 2%;
}
nput::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
input:disabled{
    background-color:white;
}
.parent :nth-child(2){
 width:20px;
 margin-left:5px;
}

  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
  @auth
                    
                    <x-app-layout>
                 

                  
                    </x-app-layout>
                    <div class="container mt-5">
            
                     <table class="table">
                    <center ><h3 class="h3 table">Cart</h3></center>
                      
                      <thead>
                        <tr>
                          <th scope="col">Product</th>
                          <th scope="col">Price</th>
                          <th scope="col">Quantity</th>
                          <th scope="col">Total Price</th>
                          <th>image</th>
                        </tr>
                      </thead>
                      <tbody>
                      
                      {{ csrf_field()}}
                      @if(Session::has('cart'))
               

                    @foreach($products as $product)
             
                     <tr class="head">
                        
                           <td>{{$product['name']}}</td>
                           <td class="pricerow" style=""><p class="price">{{$product['price']}}</p></td>
                           <td>
                                  <div class="parent" style="display:flex;">
                                        <div class="p-2  bg-secondary rounded minus" >
                                            <a style="cursor:pointer;padding:5px;color:white"  class="cart-qty-minus" style="" class="mx-2  bg-secondary text-light rounded" data-pId="{{$product['item']['id']}}">-</a>
                                        </div>
                                        <input style=""  style="border:none;" value="{{$product['qty']}}" name="quantity" disabled class="quantity" min="1"  >
                                        <div class="button-container p-2 rounded bg-secondary" style="">
                                          <a id="clickme" class="cart-qty-plus" style="cursor:pointer;padding:5px;color:white" class="ml-2  bg-secondary rounded text-light" data-pId="{{$product['item']['id']}}">+</a>
                                        </div>
                                    </div>
                          </td>
                         <td class="totalprice ">
                                    <input  type="text"  style="border:none;background-color:white;width:75px;padding-left:-20px;text-align:center !important" class="form-control total"  value="{{$product['totalamount']}}"  disabled>
                        </td>
                        <td>
                                      <img src="{{'uploads/'.$product['file']}}" width="60px" alt="">
                        </td>
                       </tr>
                        @endforeach
                        <tr class="overall_price ">
                          <td colspan="2" style="">
                            <span class="h4 ml-5 ">Total To Pay  :</span>
                              
                          </td>
                          <td colspan="2" style="">
                          <p class="h5 mt-1 ml-3" id="sum" style="margi">
                               </p>
                          </td>
                          <td>
<button onclick="$('.table').hide()"  style="background-color:blue" class="btn btn-primary checkout" >Checkout</a>


                          </td>
                        </tr>
   
  </tbody>


</table>
<div class="checkout">

</div>



</div>


<script>


  //////////////////////////////////////
  var incrementPlus;
var incrementMinus;



var buttonPlus  = $(".cart-qty-plus");
var buttonMinus = $(".cart-qty-minus");




var incrementPlus = buttonPlus.click(function() {
	var n = $(this)
		.parent(".button-container")
		.parent(".parent")
		.find(".quantity");
	n.val(Number(n.val())+1 );
  n.attr("value",Number(n.val()));
  var totalamount=$(this).closest("tr").children('.totalprice').find('.total').val();
 


  
  var currentRow=$(this).closest("tr").children('.pricerow').find('p').html();
  var data=currentRow*n.val();
 var d=$(this).closest("tr").children('.totalprice').find('.total').attr('value',data);

calc_total();
let proId = $(this).data('pid');
var quantity=$(this)
		.parent(".button-container")
		.parent(".parent")
		.find(".quantity").val();

    

$.ajax({
      type: 'get',
      data: {
        "_token": "{{ csrf_token()}}",
        'proId' : proId,
        'quantity':quantity
      },
      url: '{{url("checkout-form")}}',
      dataType: 'json',
      async : false,   
      success: function(data) 
      {
        window.location.reload();
      }
    });
  
});
function calc_total(){
  var sum = 0;
  $(".total").each(function(){
  
    sum += parseFloat($(this).val());
    
  });
  $('#sum').text(sum);
}
calc_total();

////////////////////////////////////////////////////////////////////////////
var incrementMinus = buttonMinus.click(function() {


  let proId = $(this).data('pid');
var quantity=$(this)
		.parent(".button-container")
		.parent(".parent")
		.find(".quantity").val();

    

$.ajax({
      type: 'get',
      data: {
        "_token": "{{ csrf_token()}}",
        'proId' : proId,
        'quantity':quantity
      },
      url: '{{url("checkout-form")}}',
      dataType: 'json',
      async : false,   
      success: function(data) 
      {
        window.location.reload();
      }
    });
  

  
		var n = $(this)
		.parent(".minus")
		.parent(".parent")
		.find(".quantity");
	var amount = Number(n.val());

	if (amount > 0) {
		n.val(amount-1);
  var currentRow=$(this).closest("tr").children('.pricerow').find('p').html();

    var data=Math.round(currentRow*n.val());
 var d=$(this).closest("tr").children('.totalprice').find('.total').attr('value',data);

 

calc_total();
if(n.val()<1)
{
  let proId = $(this).data('pid');
 
  $.ajax({
      type: 'get',
      data: {
        "_token": "{{ csrf_token()}}",
        'proId' : proId,
      },
      url: '{{route("remove-item-from-cart")}}',
      dataType: 'json',
      async : false,   
      success: function(data) 
      {
        window.location.reload();
      }
    });
 
}


	}
});

// $(document).on('submit','.checkoutform',function(e){
 
//   e.preventDefault();
//   alert('here');
//   $.ajax({
//     type:'post',
//     data:new FormData(this),
//     contentType:false,
//     cache:false,
//     processData:false,
//     url:"{{url('checkout-data')}}",
//     dataType:'json',
//     success:function(data){
//       // location.reload();
//     }

//   })
// })


  
</script>


@endif

@endauth
