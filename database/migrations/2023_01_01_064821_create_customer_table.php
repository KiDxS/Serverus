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
        Schema::create('customer', function (Blueprint $table) {
            $table->string('customer_name', 30)->primary();
            $table->string('address', 50);
            $table->string('phone_number', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_record');
        Schema::dropIfExists('customer_cart');
        Schema::dropIfExists('customer_receipt');
        Schema::dropIfExists('customer');
    }
};
