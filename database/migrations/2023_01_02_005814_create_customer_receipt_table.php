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
        Schema::create('customer_receipt', function (Blueprint $table) {
            $table->integer('receipt_id', true);
            $table->integer('cart_id');
            $table->double('total', 8, 2);
            $table->date('created_at');
            $table->foreign('cart_id')->references('cart_id')->on('customer_cart');
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
        Schema::dropIfExists('customer_receipt');
        Schema::dropIfExists('customer_cart');
        Schema::dropIfExists('product');
        Schema::dropIfExists('inventory');
        Schema::dropIfExists('customer_record');
        Schema::dropIfExists('customer');
        Schema::dropIfExists('store');
    }
};
