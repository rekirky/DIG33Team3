<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->integer('productid')->unique();
            $table->string('name');
            $table->string('type');
            $table->string('size',20);
            $table->string('summary');
            $table->string('description');
            $table->string('energy',20);
            $table->string('fat',10);
            $table->string('sugar',10);
            $table->string('carbohydrate',10);
            $table->string('protein',10);
            $table->string('salt',10);
            $table->string('ingredients');       
            $table->string('tooltip1');       
            $table->string('tooltip2');
            $table->string('tooltip3');
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
    }
}
