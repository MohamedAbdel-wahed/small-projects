@extends('layout')


@section('content')
 <div class="container text-center my-20 w-full">
     <h1 class="text-3xl text-white">Edit Item</h1>
    <form action="{{ route('update', $item->id) }}" method="POST" class="w-full flex flex-col items-center my-8 select-none">
        @method('PATCH')
        @csrf 
        <div class="my-2 w-full">
           <input type="text" name="title" value="{{$item->title}}" placeholder="add new item" autocomplete="off" class="w-64 text-gray-800 text-sm px-4 py-2 border border-gray-400 focus:outline-none focus:border-indigo-400 rounded">
           @error('title')
              <p class="text-center text-red-500 text-sm my-1">{{ $message }}</p>  
           @enderror
        </div> 
         <div class="my-2 w-full">
           <textarea name="description" placeholder="add new item" rows="8" class="w-64 text-gray-800 text-sm px-4 py-2 border border-gray-400 focus:outline-none focus:border-indigo-400 rounded">{{$item->description}}</textarea>
           @error('description')
              <p class="text-center text-red-500 text-sm my-1">{{ $message }}</p>  
           @enderror
        </div>
        <button class="my-1 px-4 py-2 text-green-100 text-sm font-semibold bg-green-500 hover:text-green-200 focus:bg-green-700 focus:outline-none rounded-md">Save Changes</button>
     </form>   
 </div>
@endsection