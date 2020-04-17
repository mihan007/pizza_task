<?php

namespace Tests\Feature;

use App\Product;
use Tests\TestCase;

/**
 * Class ProductTest
 * @package Tests\Feature
 * @group ProductTest
 */
class ProductTest extends TestCase
{
    public function testGetProductList()
    {
        $response = $this->get('/api/v1/products');

        $response->assertStatus(200);
        $response->assertJsonStructure([
            'data' => [
                '*' =>
                    [
                        'type',
                        'id',
                        'attributes' => [
                            'title',
                            'description',
                            'image',
                            'price_eur',
                            'price_usd',
                            'rating',
                            'created-at',
                            'updated-at'
                        ],
                        'links' => [
                            'self'
                        ]
                    ]
            ]
        ]);
    }

    public function testGetProduct()
    {
        $product = Product::firstOrFail();
        $response = $this->get('/api/v1/products/' . $product->id);

        $response->assertStatus(200);
        $response->assertJsonStructure([
            'data' =>
                [
                    'type',
                    'id',
                    'attributes' => [
                        'title',
                        'description',
                        'image',
                        'price_eur',
                        'price_usd',
                        'rating',
                        'created-at',
                        'updated-at'
                    ],
                    'links' => [
                        'self'
                    ]
                ]
        ]);
    }

    public function testGetMissingProduct()
    {
        $response = $this->get('/api/v1/products/0');

        $response->assertStatus(404);
    }
}
