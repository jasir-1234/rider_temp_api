<?php

namespace App\Http\Controllers;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderedItemsController extends Controller
{
    public function create(Request $request){
        $items = new OrderItem();
        $items->item = $request->input('item');
        $items->save();
        return response()->json($items);
    }
    public function show(){
        $items= OrderItem::all();
        return response()->json($items);
    }
  
}
