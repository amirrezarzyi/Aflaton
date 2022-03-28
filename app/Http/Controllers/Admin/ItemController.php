<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Factory;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function show(Factory $factory)
    {
        dd('hi');
        $products = $factory->products;
        return view('factory.show',compact('factory','products'));
    }

}
