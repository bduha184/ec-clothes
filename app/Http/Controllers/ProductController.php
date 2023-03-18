<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function index()
    {
        return view('product.index')
            ->with('products', Product::get());
    }

    public function show($id){
        $product = Product::find($id);
        return view('product.show',compact('product'));
    }
}
