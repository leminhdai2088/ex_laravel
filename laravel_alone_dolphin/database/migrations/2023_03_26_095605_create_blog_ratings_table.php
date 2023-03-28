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
        Schema::create('blog_ratings', function (Blueprint $table) {
            $table->id();

            $table->integer('blog_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('email');
            $table->string('name');

            $table->text('messages');
            $table->float('stars')->default(0.0);
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
        Schema::dropIfExists('blog_ratings');
    }
};
