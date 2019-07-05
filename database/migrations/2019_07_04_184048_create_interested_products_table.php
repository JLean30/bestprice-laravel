<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterestedProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interested_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('interested_id')->unsigned();
            $table->integer('owner_id')->unsigned();
            $table->integer('product_id')->unsigned();  
            $table->timestamps();
        });
        Schema::table('interested_products', function($table)
        {
            $table->foreign('interested_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('owner_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
    
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interested_products');
    }
}
