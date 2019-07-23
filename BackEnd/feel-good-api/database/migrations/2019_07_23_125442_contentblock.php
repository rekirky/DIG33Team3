<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class contentblock extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contentblocks', function (Blueprint $table) {
            $table->integer('contentid')->unique();
            $table->string('shortcode');
            $table->string('title');
            $table->string('tagline');
            $table->string('summary');
            $table->string('description');
            $table->string('featureimage');
            $table->string('backgroundimage');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contentblocks');
    }
}
