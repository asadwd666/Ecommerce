<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto " style="width:12rem;">
          <form action="adding_items" method="post" enctype="multipart/form-data">
            @csrf
            <input type="text" class="form-control" name="product_name" placeholder="Product Name"><br><br>
            <input type="number" class="form-control" name="product_quantity" placeholder="Product Quantity"><br><br>
            <input type="file" name="product_img" class="form-control"><br><br>
            <textarea name="product_dsc" id="" class="form-control" cols="30" rows="10" placeholder="product Description"></textarea>
            <button type="submit" class="btn btn-primary" style="border:2px solid;border-radius:10px;padding:8px">Save</button>
          </form>
        </div>
    </div>
</x-app-layout>
