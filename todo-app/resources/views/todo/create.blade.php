@extends('layout')


@section('content')
 <div class="container text-center my-20 w-full">
     <h1 class="text-3xl text-white">Create New Item</h1>
    <form action="{{ route('store') }}" method="POST" class="w-full flex flex-col items-center my-8 select-none">
        @csrf 
        <div class="my-2 w-full">
           <input type="text" name="title" placeholder="add new item" autocomplete="off" class="w-64 text-gray-800 text-sm px-4 py-2 border border-gray-400 focus:outline-none focus:border-indigo-400 rounded">
           @error('title')
              <p class="text-center text-red-500 text-sm my-1">{{ $message }}</p>  
           @enderror
        </div> 
         <div class="my-2 w-full">
           <textarea name="description" placeholder="add new item" rows="8" class="w-64 text-gray-800 text-sm px-4 py-2 border border-gray-400 focus:outline-none focus:border-indigo-400 rounded"></textarea>
           @error('description')
              <p class="text-center text-red-500 text-sm my-1">{{ $message }}</p>  
           @enderror
        </div>
        <button class="my-1 px-4 py-2 text-green-100 text-sm font-semibold bg-green-500 hover:text-green-200 focus:bg-green-700 focus:outline-none rounded-md">Add Item</button>
     </form>   
 </div>
@endsection