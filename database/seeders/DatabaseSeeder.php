<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Customer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Store::factory()->create();
        \App\Models\Inventory::factory()->create();
        \App\Models\Employee::factory()->create([
            'username' => 'admin'
        ]);
        \App\Models\Employee::factory(2)->create();
        \App\Models\Product::factory(4)->create();
        \App\Models\Customer::factory(4)->create();
        // $this->customerRecordSeed();
        // $this->customerCartSeed();
        // $this->customerReceiptSeed();
    }

    private function firstProduct()
    {
        $products = \App\Models\Product::all();
        $product = $products[0];
        return $product;
    }
    private function customerReceiptSeed()
    {
        \App\Models\CustomerReceipt::factory()->create();

        // Retrieves the sale price of the product and the quantity to calculate its total
        $result = DB::select('SELECT (product.sale_price * customer_cart.quantity) AS total FROM customer_receipt, customer_cart, product
        where (customer_receipt.cart_id = customer_cart.cart_id AND customer_receipt.cart_id = 1) 
        AND 
        (customer_cart.product_id = product.product_id AND customer_cart.product_id = 1);');

        // Updates the value of the total of the receipt
        DB::update('UPDATE `customer_receipt` SET `total` = ? WHERE `receipt_id` = 1; ', [$result[0]->total]);
    }
    private function customerCartSeed()
    {
        $customers = \App\Models\Customer::all();

        $customer = $customers[0];
        $product = $this->firstProduct();
        $customer_name = $customer->customer_name;
        $product_id = $product->product_id;
        \App\Models\CustomerCart::factory()->create([
            'product_id' => $product_id,
            'customer_name' => $customer_name
        ]);
    }


    private function customerRecordSeed()
    {
        $customers = \App\Models\Customer::all();
        foreach ($customers as $customer) {
            $customer_name = $customer->customer_name;
            \App\Models\CustomerRecord::factory()->create([
                'customer_name' => $customer_name
            ]);
        }
    }
}
