@extends('layout')


@section('content')
    <div class="mt-12 mb-32 w-full flex justify-center px-16 text-white">
       <div class="w-2/3">
         <a href="{{ route('create') }}" class="my-12 float-right px-4 py-2 text-red-100 text-xs font-semibold bg-green-500 hover:text-green-200 focus:bg-green-700 focus:outline-none rounded-md">Add New Item</a>
            <h1 class="my-4 text-center text-4xl font-bold text-gray-200 select-none">Todo App</h1>
            <div class="w-full flex justify-around py-3 border-t border-b border-gray-300 rounded select-none">
               <div class="w-1/3 flex justify-center font-bold">ID</div>
               <div class="w-1/3 flex justify-center items-center font-bold"><span class="mr-2 px-4 py-1 rounded-full text-white bg-yellow-500">{{ count($items) }}</span>Items</div>
               <div class="w-1/3 flex justify-center font-bold">Action</div>
            </div>
           <div class="w-full mt-2">
              @foreach ($items as $item)
                  <div class="flex justify-around py-4 rounded select-none">
                     <div class="w-1/3 flex justify-center">#{{ $item->id }}</div>
                     <div class="w-1/3 flex justify-center">
                        <a href="{{ route('show', $item->id) }}" class="hover:underline"> {{ $item->title }}</a>
                     </div>
                     <div class="w-1/3 flex justify-center">
                        <a href="{{ route('edit', $item->id) }}" class="px-3 py-1 text-teal-100 text-xs font-semibold bg-teal-500 hover:text-teal-200 focus:bg-teal-700 focus:outline-none rounded-md" >Edit</a>
                       <form action="{{ route('destroy',$item->id) }}" method="POST">
                          @method('DELETE')
                          @csrf
                          <button class="ml-2 px-3 py-1 text-red-100 text-xs font-semibold bg-red-500 hover:text-red-200 focus:bg-red-700 focus:outline-none rounded-md">Delete</button>
                       </form>
                     </div>
                  </div>
              @endforeach
           </div>
       </div>
    </div>
@endsection