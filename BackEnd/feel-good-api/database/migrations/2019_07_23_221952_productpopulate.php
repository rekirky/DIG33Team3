<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Productpopulate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('product')->insert(
            array(
                'productid' => 1,
                'name' => 'Orange, Passionfruit & Water',
                'type' => 'Bubbly',
                'size' => '275ml',
                'summary' => 'Enjoy our Bit Bubbly 100% natural* drinks with no added sugar. Now Available in 275ml paper bottles in a range of Feel Good flavours:',
                'description' => 'Description',
                'energy' => '121kJ (29kcal)',
                'fat'  => '0.0g',
                'carbohydrate' => '6.8g',
                'sugar' => '6.5g',
                'protein'  => '0.1g',
                'salt'  => '<0.01g',
                'ingredients' => 'Fruit Juice from concentrate 67% (Apple, Orange, Mango, Lemon, Carrot, Passionfruit, Acerola, Peach, Apricot), Sparkling Water, Natural Flavouring, Stabilisiser (pectin)',
                'tooltip1' => 'Innovative paper bottle shape build for functionality and strength',
                'tooltip2' => '80% compostable',
                'tooltip3' => 'A blended combination of wheat straw, bamboo, husks, sugar cane and/or bulrush.'
             )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product', function (Blueprint $table) {
            //
        });
    }
}
