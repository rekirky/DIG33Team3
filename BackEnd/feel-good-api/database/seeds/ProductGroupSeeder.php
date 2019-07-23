<?php

use Illuminate\Database\Seeder;

class ProductGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\ProductGroup::insert([
            "name" => "a bit bubbly",
            "accentColor" => "#c0539f",
            "tagLine" => "Enjoy our Bit Bubbly 100% natural* drinks with no added sugar. Now Available in 275ml paper bottles in a range of Feel Good flavours:"
        ]);

        \App\ProductGroup::insert([
            "name" => "refreshingly still",
            "accentColor" => "#f49b23",
            "tagLine" => "Enjoy our Refreshingly Still 100% natural* drinks with no added sugar. Now Available in 275ml paper bottles in a range of Feel Good flavours:"
        ]);
    }
}
