<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Product::insert([
            "productGroup" => 1,
            "name" => "Orange, Passion Fruit & Water",
            "nutritionalVolume" => "100ml",
            "energy" => "121kJ (29kcal)",
            "fat" => "0g of which saturates 0g",
            "carbs" => "6.8g of which sugars* 6.5g",
            "protein" => "0.1g",
            "salt" => "<0.01g",
            "ingredients" => "Fruit Juice from concentrate 67% (Apple, Orange, Mango, Lemon, Carrot, Passionfruit, Acerola, Peach, Apricot), Sparkling Water, Natural Flavouring, Stabiliser (pectin)",
            "color" => "#c0539f",
            "bottleGroupImage" => "bb_pink.png",
            "bottleHeroImage" => "bb_pink_bigbottle_01.png",
            "fruitGroupImage" => "bb_fruit_pink.png",
            "fruit1Image" => "bb_fruit_pink_orange.png",
            "fruit1Description" => "Our oranges are navel orange, varieties are grown in the southern growing regions of NSW Australia & Nevada California USA. Navel oranges are a rich source of Vitamin C rich in colour, sweet and juicy for the best taste sensation. ",
            "fruit2Image" => "bb_fruit_pink_passion.png",
            "fruit2Description" => "Our passion fruits are grown in Australian farming region of Queensland and California USA. The purple fruit is originally native to Southern Brazil through Paraguay to northern Argentina. They contain over 50% Vitamin A and C. "
        ]);

        \App\Product::insert([
            "productGroup" => 1,
            "name" => "Cranberry, Lime & Water",
            "nutritionalVolume" => "100ml",
            "energy" => "112kJ (27kcal)",
            "fat" => "0g of which saturates 0g",
            "carbs" => "6.3g of which sugars* 6.0g",
            "protein" => "0.1g",
            "salt" => "0.04g",
            "ingredients" => "Mixed Fruit Juices from concentrate 62% (Apple, Cranberry, Lime), Sparkling Water, Vegetable and Plant Extracts, Natural Flavourings",
            "color" => "#c0539f",
            "bottleGroupImage" => "bb_red.png",
            "bottleHeroImage" => "bb_red_bigbottle_01.png",
            "fruitGroupImage" => "bb_fruit_red.png",
            "fruit1Image" => "bb_fruit_red_cranberry.png",
            "fruit1Description" => "Cranberries are most commonly grown in North America, they are heather and have rich in various healthy vitamins.",
            "fruit2Image" => "bb_fruit_red_lime.png",
            "fruit2Description" => "Lime are a tropical and subtropical fruit, widely grown in the Mediterranean and Southern Americas. They have high in vitamin C."
        ]);

        \App\Product::insert([
            "productGroup" => 1,
            "name" => "Apple, Elderflower & Water",
            "nutritionalVolume" => "100ml",
            "energy" => "110kJ (26kcal)",
            "fat" => "0g of which saturates 0g",
            "carbs" => "6.3g of which sugars* 6.0g",
            "protein" => "0.1g",
            "salt" => "<0.01g",
            "ingredients" => "Fruit juice from Concentrate 61% (Apple, Acerola), Sparkling Water, Natural Flavourings",
            "color" => "#c0539f",
            "bottleGroupImage" => "bb_green.png",
            "bottleHeroImage" => "bb_green_bigbottle_01.png",
            "fruitGroupImage" => "bb_fruit_green.png",
            "fruit1Image" => "bb_fruit_green_apple.png",
            "fruit1Description" => "The Granny Smith apple was developed in Australia 1868, they are tart in flavour and are a high-antioxidant.",
            "fruit2Image" => "bb_fruit_green_elder.png",
            "fruit2Description" => "The white flower blossom of the elderberry tree is commonly used in British drinks and deserts. the delicate flavour of the elderflower has medicinal properties such as anti-inflammatory and rich in bioflavonoids."
        ]);
        

        \App\Product::insert([
            "productGroup" => 2,
            "name" => "Orange, Mango & Water",
            "nutritionalVolume" => "100ml",
            "energy" => "121kJ (29kcal)",
            "fat" => "0g of which saturates 0g",
            "carbs" => "6.8g of which sugars* 6.5g",
            "protein" => "0.2g",
            "salt" => "<0.01g",
            "ingredients" => "Fruit Juices from concentrate 67% (Apple, Orange, Mango, Lemon, Carrot, Passionfruit, Acerola, Peach, Apricot), Water, Natural Flavouring, Stabiliser (pectin)",
            "color" => "#f49b23",
            "bottleGroupImage" => "rs_orange.png",
            "bottleHeroImage" => "rs_orange_bigbottle_01.png",
            "fruitGroupImage" => "rs_fruit_orange.png",
            "fruit1Image" => "rs_fruit_orange_oranges.png",
            "fruit1Description" => "Our oranges are navel orange, varieties are grown in the southern growing regions of NSW Australia & Nevada California USA. Navel oranges are a rich source of Vitamin C rich in colour, sweet and juicy for the best taste sensation. ",
            "fruit2Image" => "rs_fruit_orange_mango.png",
            "fruit2Description" => "The honey mango variety is chosen for its sweet and creamy taste and contain over 20 vitamins and minerals."
        ]);

        \App\Product::insert([
            "productGroup" => 2,
            "name" => "Lemon, Elderflower & Water",
            "nutritionalVolume" => "100ml",
            "energy" => "139kJ (33kcal)",
            "fat" => "0g of which saturates 0g",
            "carbs" => "8.0g of which sugars* 7.8g",
            "protein" => "0.1g",
            "salt" => "<0.01g",
            "ingredients" => "Fruit Juice from Concentrate 65% (Apple, Grape, Lemon, Acerola), Water, Natural Flavourings",
            "color" => "#f49b23",
            "bottleGroupImage" => "rs_yellow.png",
            "bottleHeroImage" => "rs_yellow_bigbottle_01.png",
            "fruitGroupImage" => "rs_fruit_yellow.png",
            "fruit1Image" => "rs_fruit_lemon.png",
            "fruit1Description" => "Lemons are distinctive in flavour and rich in colour thrive in the warm climate regions of Italy, California and Florida. They contain high quantities of Vitamin C.",
            "fruit2Image" => "rs_fruit_yellow_elder.png",
            "fruit2Description" => "The white flower blossom of the elderberry tree is commonly used in British drinks and deserts. the delicate flavour of the elderflower has medicinal properties such as anti-inflammatory and rich in bioflavonoids."
        ]);

        \App\Product::insert([
            "productGroup" => 2,
            "name" => "Cranberry, Pomegranate & Water",
            "nutritionalVolume" => "100ml",
            "energy" => "128kJ (31kcal)",
            "fat" => "0g of which saturates 0g",
            "carbs" => "7.3g of which sugars* 7.2g",
            "protein" => "0.1g",
            "salt" => "<0.01g",
            "ingredients" => "Fruit juice from Concentrate 61% (Apple, Acerola), Sparkling Water, Natural Flavourings",
            "color" => "#f49b23",
            "bottleGroupImage" => "rs_red.png",
            "bottleHeroImage" => "rs_red_bigbottle_01.png",
            "fruitGroupImage" => "rs_fruit_red.png",
            "fruit1Image" => "rs_fruit_red_cranberry.png",
            "fruit1Description" => "Cranberries are most commonly grown in North America, they are heather and have rich in various healthy vitamins.",
            "fruit2Image" => "rs_fruit_red_pommy.png",
            "fruit2Description" => "The pomegranate are jewel-like seeds are rich in vitamin C, potassium. They are grown in Middle East, South Asia, and the Mediterranean region."
        ]);

        
    }
}
