@extends('layout')


@section('content')
   <div class="container mt-24 flex flex-col items-center px-40">
       <h1 class="text-3xl font-bold text-green-500">Item Details</h1>
       <div class="w-full my-12">
            <h2 class="text-white px-8 text-left text-xl font-semibold">{{ $item->title }}<h2>
            <p class="text-sm my-6 px-10 text-gray-100">{{ $item->description }}</p>
       </div>
   </div>
@endsection