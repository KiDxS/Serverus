<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'username' => 'admin',
        // ]);



        \App\Models\Store::factory()->create();
        \App\Models\Inventory::factory()->create();
        \App\Models\Employee::factory()->create([
            'username' => 'admin'
        ]);
        \App\Models\Product::factory(4)->create();
        \App\Models\Customer::factory(4)->create();
        $this->customerRecordSeed();
        $this->customerCartSeed();
        \App\Models\CustomerReceipt::factory()->create();
    }

    private function customerCartSeed()
    {
        $customers = \App\Models\Customer::all();
        $products = \App\Models\Product::all();
        $customer = $customers[0];
        $product = $products[0];
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
