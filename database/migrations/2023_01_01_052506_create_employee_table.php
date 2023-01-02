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
        Schema::create('employee', function (Blueprint $table) {
            $table->integer('emply_id', true);
            $table->string('store_name', 30);
            $table->double('salary', 8, 2);
            $table->string('username', 20);
            $table->string('password', 100);
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
        Schema::dropIfExists('employee');
        Schema::dropIfExists('store');
    }
};
