<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product.index',compact('products'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $inputs = $request->all();
        dd($inputs);
    }

    public function edit()
    {
        return view('product.craete');
    }

    public function update()
    {
        return view('product.craete');
    }

    public function destroy()
    {
        return view('product.craete');
    }
}
