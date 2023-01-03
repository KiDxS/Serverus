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
        Schema::create('customer_cart', function (Blueprint $table) {
            $table->integer('cart_id', true);
            $table->integer('product_id');
            $table->integer('quantity');
            $table->string('customer_name', 30);
            $table->foreign('product_id')->references('product_id')->on('product');
            $table->foreign('customer_name')->references('customer_name')->on('customer')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('employee');
        Schema::dropIfExists('customer_cart');
        Schema::dropIfExists('product');
        Schema::dropIfExists('inventory');
        Schema::dropIfExists('customer_record');
        Schema::dropIfExists('customer');
        Schema::dropIfExists('store');
    }
};
