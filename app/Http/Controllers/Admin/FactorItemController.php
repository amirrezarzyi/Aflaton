<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\FactorItem;
use App\Models\Admin\Factory;
use App\Models\Admin\Product;
use Illuminate\Http\Request;

class FactorItemController extends Controller
{

    public function create(Factory $factory)
    {
        $products = Product::all();
        return view('item.create', compact('products', 'factory'));
    }
    public function store(Request $request, Factory $factory)
    {
        $product = Product::where('id', $request->product_id)->first();


        $facpro = FactorItem::create([
            'product_id' => $request->product_id,
            'factory_id' => $factory->id,
            'number' => $request->number,
            'price' => $product['price'],
            'amount' => $request->number * $product['price'],
        ]);
        return redirect()->route('admin.factories.show', $factory->id);
        // $factory->products()->attach($request->input('products'));

    }

    public function update(FactorItem $factorItem, Request $request)
    {
        $P_amounts = $factorItem->pluck('amount');

        $P_prices  = $factorItem->pluck('price');
        $P_numbers = $factorItem->pluck('number');

        $amounts = 0;
        $prices  = 0;
        $numbers = 0;

        foreach ($P_amounts as $amount) { $amounts += $amount; }
        foreach ($P_prices  as $price)  { $prices += $price;   }
        foreach ($P_numbers as $number) { $numbers += $number; }
         $factorItem->update([
            'number' => $request->number,
            'price' => $request->price,
            'amount' => $request->number *  $request->price,
        ]);
         return redirect()->back();
    }

    public function destroy(FactorItem $factorItem,)
    {
        $factorItem->delete();
        return redirect()->back();
    }
}
