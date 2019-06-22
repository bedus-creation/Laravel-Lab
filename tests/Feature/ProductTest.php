<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Product;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function attribites_are_associated_with_product()
    {
        $this->withoutExceptionHandling();
        $data = [
            "keys" => ["name", "Color"],
            "values" => ["Bedram", "Gray"]
        ];
        $this->post('post', $data);
        $product = Product::with('attributes')->first();
        $this->assertEquals(count($product->attributes), 2);
    }
}
