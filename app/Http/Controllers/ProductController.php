<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller

{
    public function all_products() {
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

        $product->product_name = $fields['product_name'];
        $product->quantity = $fields['quantity'];
        $product->cost_price = $fields['cost_price'];
        $product->sale_price = $fields['sale_price'];

        // Insert data to the database
        $product->save();
        
        // Redirects user to the previous page
        return redirect('dashboard')->with('message', 'Successfuly added a product!');
    }

    public function retrieve_product($id) {
        $product = Product::findOrFail($id);
        return view('product.edit', ['product' => $product]);
    }

    //
    public function update_product(Request $request) {
        $fields = $request->validate([
            'id' => ['required'],
            'product_name' => ['required'],
            'quantity' => ['required'],
            'cost_price' => ['required'],
            'sale_price' => ['required'],
        ]);
        $id = $fields['id'];
        $product = Product::findOrFail($id);

        $product->product_name = $fields['product_name'];
        $product->quantity = $fields['quantity'];
        $product->cost_price = $fields['cost_price'];
        $product->sale_price = $fields['sale_price'];

        // Insert data to the database
        $product->save();
        
        // Redirects user to the previous page
        return redirect('dashboard')->with('message', 'Successfuly edited a product!');
    }


    public function delete_product(Request $request) {
        $id = $request->id;
        $product = Product::findOrFail($id);
        $product->delete();
        return back()->with('message', 'Successfuly deleted a product!');
    }
}
