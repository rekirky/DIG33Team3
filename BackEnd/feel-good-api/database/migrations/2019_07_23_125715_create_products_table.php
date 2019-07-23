<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger('productGroup');
            $table->string('name');
            $table->string('nutritionalVolume');
            $table->string('energy');
            $table->string('fat');
            $table->string('carbs');
            $table->string('protein');
            $table->string('salt');
            $table->string('ingredients');
            $table->string('color');
            $table->string('bottleGroupImage');
            $table->string('bottleHeroImage');
            $table->string('fruitGroupImage');
            $table->string('fruit1Image');
            $table->string('fruit1Description');
            $table->string('fruit2Image');
            $table->string('fruit2Description');

            $table->foreign('productGroup')->references('id')->on('product_group');

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
