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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('name')->nullable();
            $table->string('house_number')->nullable();
            $table->string('street')->nullable();
            $table->string('postcode')->nullable();
            $table->string('city')->nullable();
            $table->string('email')->nullable();
            $table->string('product_id')->nullable();
            $table->string('product_name')->nullable();
            $table->string('quantity')->nullable();
            $table->string('price')->nullable();
            $table->string('orderStatus')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
