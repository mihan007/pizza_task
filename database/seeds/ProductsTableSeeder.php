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
        $imgCounter = 1;
        foreach (Pizza::LIST as $title => $description) {
            $pizzaUsdCost = random_int(500, 1500);
            $pizzaEurCost = round($pizzaUsdCost * $rate->getValue());
            $imageName = ($imgCounter < 10) ? '0' . $imgCounter : $imgCounter;
            $pizza = [
                'title' => $title,
                'description' => $description,
                'image' => env('APP_URL') . '/img/pizza/img000' . $imageName . '.jpg',
                'price_eur' => $pizzaEurCost,
                'price_usd' => $pizzaUsdCost,
                'rating' => random_int(2, 5)
            ];
            Product::create($pizza);
            $imgCounter++;
        }
    }
}
