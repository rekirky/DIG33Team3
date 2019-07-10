<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class db_initiate extends Migration
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
            $table->string('carbohydrate',10);
            $table->string('protein',10);
            $table->string('salt',10);
            $table->string('ingredients');       
        })
        
        Schema::create('event', function (Blueprint $table) {
            $table->integer('eventid')->unique();
            $table->string('name');
            $table->string('summary');
            $table->string('description');
            $table->datetime('datetime');
            $table->string('featureimage');
           
        })
        
        Schema::create('contentblock', function (Blueprint $table) {
            $table->integer('contentid')->unique();
            $table->string('shortcode');
            $table->string('title');
            $table->string('tagline');
            $table->string('summary');
            $table->string('description');
            $table->string('featureimage');
            $table->string('backgroundimage');
           
        })
        
        Schema::create('video', function (Blueprint $table) {
            $table->integer('videoid')->unique();
            $table->string('title');
            $table->string('summary');
            $table->string('description');
            $table->string('youtubeurl');
                       
        })
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
        Schema::dropIfExists('event');
        Schema::dropIfExists('contentblock');
        Schema::dropIfExists('video');
    }
}
