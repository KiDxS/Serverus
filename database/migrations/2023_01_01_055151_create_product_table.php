<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->integer('product_id', true);
            $table->string('product_name', 30);
            $table->integer('quantity');
            $table->double('cost_price', 8, 2);
            $table->double('sale_price', 8, 2);
            $table->string('inventory_name', 30);
            $table->foreign('inventory_name')->references('inventory_name')->on('inventory');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
        Schema::dropIfExists('employee');
        Schema::dropIfExists('inventory');
        Schema::dropIfExists('store');
        
        
    }
};
