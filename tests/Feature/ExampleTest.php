<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Product;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    use RefreshDatabase;

    public function it_checks_stock_for_products_at_retailers(): void
    {
        $switch = Product::create(['name' => 'Nintendo Switch']);
        $bestBut = Retailer::create(['name' => 'Best Buy']);

        $this->assertFalse($switch->inStock());
    }
}
