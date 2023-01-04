<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\CustomerCart;
use App\Models\CustomerReceipt;
use App\Models\Product;
use Illuminate\Http\Request;

class CustomerReceiptController extends Controller
{
    public function render_data() {
        $customer_receipt = new CustomerReceipt;
        $products = Product::all(['product_id', 'product_name']);
        $receipts = $customer_receipt->retrieve_all_customer_receipts();
        return view('receipt.page', ['receipts' => $receipts, 'products' => $products]);
    }
    public function create_customer_receipt(Request $request)
    {
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
    public function edit_customer_information_in_receipt(Request $request)
    {
        $fields = $request->validate([
            'customer_name' => ['required'],
            'current_customer_name' => ['required'],
            'address' => ['required'],
            'phone_number' => ['required'],
        ]);
        $customer = new Customer;

        // updates the information of a customer by taking the current_customer_name as a condition
        $customer->update_customer($fields['current_customer_name'], $fields['address'], $fields['phone_number'], $fields['customer_name']);
        return redirect('/receipt')->with('message', 'Successfuly edited a receipt!');
    }

    public function retrieve_customer_receipt($receipt_id) {
        $customer_receipt = new CustomerReceipt;
        $result = $customer_receipt->retrieve_customer_receipt($receipt_id);
        return view('receipt.view', ['customer_receipt' => $result]);

    }

    public function delete_customer_receipt(Request $request)
    {
        $receipt_id = $request->receipt_id;
        $customer_receipt = new CustomerReceipt;
        $customer_receipt->delete_customer_receipt($receipt_id);
        return back()->with('message', 'Successfuly deleted a receipt!');
    }
}
