<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Factory;
use App\Models\Admin\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class FactorController extends Controller
{
    public function index()
    {
        $factories = Factory::all();
        return view('factory.index',compact('factories'));
    }

    public function create()
    {
        $products = Product::all();
        return view('factory.create',compact('products'));
    }

    public function store(Request $request)
    {
        // // $inputs = $request->all();
        // $factory = new Factory();
        // $factory->code = Str::random(5);
        // $factory->title =$request->title;
        // $factory->full_name =$request->full_name;
        // $factory->save();
        // $factory->products()->attach($request->products);
        $factory = Factory::create([
            'code' => Str::random(5),
            'title' =>$request->title,
            'full_name' => $request->full_name,
        ]);

        $factory->products()->attach($request->input('products'));

        return redirect()->route('admin.factories.index');

    }

    public function show(Factory $factory)
    {
        $products = $factory->products;
        return view('factory.show',compact('factory','products'));
    }

    public function edit(Factory $factory)
    {
        $products = Product::all();
        return view('factory.edit',compact('factory','products'));
    }

    public function update(Request $request,Factory $factory)
    {
        $factory->code = $factory->code ;
        $factory->title = $request->title;
        $factory->full_name =$request->full_name;
        $factory->save();
        $factory->products()->sync($request->products);
        return redirect()->route('admin.factories.index');

    }

    public function destroy(Factory $factory)
    {
        $factory->delete();
        $factory->products()->detach();
        return redirect()->route('admin.factories.index');
    }

    public function deleteProduct($proId, Factory $factory)
    {
        $factory->products()->detach([$proId]);
        return redirect()->route('admin.factories.show',$factory->id);
    }
}
