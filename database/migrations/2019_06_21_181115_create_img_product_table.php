<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImgProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_product', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->integer('product_id')->unsigned();//metodo para la relacion foranea
                $table->integer("image_id")->unsigned();
                
                $table->timestamps();
        });
        Schema::table('image_product', function($table)
    {
        $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        $table->foreign('image_id')->references('id')->on('images')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('image_product');
    }
}
