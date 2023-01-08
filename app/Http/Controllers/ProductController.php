<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller

{
    public function render_data()
    {
        // $data = Product::all();
        // return view('product.page', ['products' => $data]);
        $product = new Product;
        $products = $product->retrieve_all_products();
        return view('product.page', ['products' => $products]);
    }

    public function create_product(Request $request)
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
        return redirect('/product')->with('message', 'Successfuly added a product!');
    }

    //
    public function edit_product(Request $request)
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
        $product->edit_product($product_id, $fields['product_name'], $fields['quantity'], $fields['cost_price'], $fields['sale_price']);
        // Redirects user to the previous page
        return redirect('/product')->with('message', 'Successfuly edited a product!');
    }
}
