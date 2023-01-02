<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller

{
    public function all_products()
    {
        $data = Product::all();
        return view('dashboard', ['products' => $data]);
    }

    public function add_product(Request $request)
    {
        // Validate
        $fields = $request->validate([
            'product_name' => ['required'],
            'quantity' => ['required'],
            'cost_price' => ['required'],
            'sale_price' => ['required'],
        ]);
        $product = new Product;
        $product->add($fields['product_name'], $fields['quantity'], $fields['cost_price'], $fields['sale_price']);

        // Redirects user to the previous page
        return redirect('dashboard')->with('message', 'Successfuly added a product!');
    }

    //
    public function update_product(Request $request)
    {
        $fields = $request->validate([
            'product_id' => ['required'],
            'product_name' => ['required'],
            'quantity' => ['required'],
            'cost_price' => ['required'],
            'sale_price' => ['required'],
        ]);
        $product_id = $fields['product_id'];
        $product = new Product();
        $product->edit($product_id, $fields['product_name'], $fields['quantity'], $fields['cost_price'], $fields['sale_price']);
        // Redirects user to the previous page
        return redirect('dashboard')->with('message', 'Successfuly edited a product!');
    }

    public function delete_product(Request $request)
    {
        $product_id = $request->product_id;

        $product = new Product();
        $product->delete_product($product_id);
        return back()->with('message', 'Successfuly deleted a product!');
    }
}
