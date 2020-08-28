<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemController extends Controller
{
    public function index()
    {
        $items= Item::all();
        return view('todo.index', compact('items'));
    }


    public function create()
    {
        return view('todo.create');
    }


    public function store()
    {
       Item::create($this->validateData());

       return redirect(route('index'));
    }
    
    
    public function show(Item $item)
    {
        return view('todo.show', compact('item'));
    }
    
    
    public function edit(Item $item)
    {
        return view('todo.edit', compact('item'));
    }


    public function update(Item $item)
    {
        $item->update($this->validateData());

      return redirect(route('show', $item->id));
    }


    public function destroy(Item $item)
    {
        $item->delete();

      return back();
    }


    private function validateData()
    {
    return  request()->validate([
          'title'=>['required','string','min:3'],
          'description'=>['required','string','min:25']
       ]);

    }
}
