<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('user_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->integer('phone');
            $table->string('maker');
            $table->string('description');
            $table->string('location');
            $table->integer('price');
            $table->string('condition');
            $table->string('status');
            $table->timestamps();
        });
        Schema::table('products', function($table)
        {
            $table->foreign('category_id')->references('id')->on('categorys')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    
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
}
