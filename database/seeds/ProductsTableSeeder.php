<?php

use App\Constants\Pizza;
use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rate = Swap::latest('USD/EUR');
        foreach (Pizza::LIST as $title => $description) {
            $pizzaEurCost = random_int(500, 1500);
            $pizzaUsdCost = round($pizzaEurCost * $rate->getValue());
            $imdWidth = random_int(415, 830);
            $aspectRatio = 628 / 415;
            $imdHeight = round($imdWidth * $aspectRatio);
            $pizza = [
                'title' => $title,
                'description' => $description,
                'image' => "https://img.pizza/{$imdWidth}/{$imdHeight}",
                'price_eur' => $pizzaEurCost,
                'price_usd' => $pizzaUsdCost,
                'rating' => random_int(2, 5)
            ];
            Product::create($pizza);
        }
    }
}
