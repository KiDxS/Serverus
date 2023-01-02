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
        Schema::create('customer_record', function (Blueprint $table) {
            $table->string('customer_name', 30)->primary();
            $table->string('store_name', 30);
            $table->foreign('customer_name')->references('customer_name')->on('customer');
            $table->foreign('store_name')->references('store_name')->on('store');
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
        Schema::dropIfExists('inventory');
        Schema::dropIfExists('employee');
        Schema::dropIfExists('customer_record');
        Schema::dropIfExists('customer');
        Schema::dropIfExists('store');
    }
};
