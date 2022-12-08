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
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->integer('product_category_id')->unsigned();
            $table->integer('room_id')->unsigned();
            $table->string('name');
            $table->string('material')->nullable();
            $table->integer('price');
            $table->integer('qty');
            $table->string('weight')->nullable();
            $table->float('sku')->nullable();
            $table->boolean('featured')->nullable()->default(true);

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
        Schema::dropIfExists('products');
    }
};
