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
        $store_name = env('STORE_NAME', 'Serverus');
        $inventory_name = env('INVENTORY_NAME', 'Serverus Inventory');
        \App\Models\Store::factory()->create(
            [
                'store_name' => $store_name
            ]
        );
        \App\Models\Inventory::factory()->create(
            [
                'store_name' => $store_name,
                'inventory_name' => $inventory_name
            ]
        );
        \App\Models\Employee::factory()->create(
            [
                'username' => 'admin',
                'store_name' => $store_name
            ]
        );
        \App\Models\Product::factory(4)->create(
            [
                'inventory_name' => $inventory_name
            ]
        );
    }
}
