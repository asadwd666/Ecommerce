<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto " style="width:12rem;">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                 <div class="card" style="width: 18rem;">
                     <img src=" {{asset('abc.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">

                         </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
