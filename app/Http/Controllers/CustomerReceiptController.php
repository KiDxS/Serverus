<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\CustomerCart;
use App\Models\CustomerReceipt;
use Illuminate\Http\Request;

class CustomerReceiptController extends Controller
{
    public function create_customer_receipt(Request $request) {
        $fields = $request->validate([
            'customer_name' => ['required'],
            'address' => ['required'],
            'phone_number' => ['required'],
            'product_id' => ['required'],
            'quantity' => ['required']
        ]);
        $customer = new Customer;
        $customer_cart = new CustomerCart;
        $customer_receipt = new CustomerReceipt;

        // creates a new customer
        $customer->create_customer($fields['customer_name'], $fields['address'], $fields['phone_number']);

        // creates a new cart
        $cart_id = $customer_cart->create_customer_cart($fields['product_id'], $fields['quantity'], $fields['customer_name']);

        // creates a new receipt 
        $customer_receipt->create_customer_receipt($cart_id, $fields['product_id']);

        return redirect('/receipt')->with('message', 'Successfuly created a receipt!');
    }
    public function edit_customer_receipt(Request $request) {
        $fields = $request->validate([
            'customer_name' => ['required'],
            'address' => ['required'],
            'phone_number' => ['required'],
        ]);
        $customer = new Customer;
        $customer_cart = new CustomerCart;

    }
}
