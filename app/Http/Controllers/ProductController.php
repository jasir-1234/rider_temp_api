<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function create(Request $request)
    {
        $products = new Product();
        $products->name = $request->input('name');
        $products->numItems = $request->input('numItems');
        $products->time = $request->input('time');
        $products->save();
        return response()->json($products);
    }
    public function show(){
        $products= Product::all();
        return response()->json($products);
    }
}

