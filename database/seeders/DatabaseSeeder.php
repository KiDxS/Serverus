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

    }
}
