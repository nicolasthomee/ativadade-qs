<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Services\ProductService;

class ProductServiceTest extends TestCase
{
    public function test_total_calculation_with_quantities_and_prices()
    {
        $items = [
            ['name' => 'A', 'price' => 10.00, 'quantity' => 2], // 20.00
            ['name' => 'B', 'price' => 5.50, 'quantity' => 3],  // 16.50
            ['name' => 'C', 'price' => 2.25],                   // quantity default 1 => 2.25
        ];

        $total = ProductService::total($items);

        $this->assertEquals(38.75, $total);
    }

    public function test_total_with_empty_list_returns_zero()
    {
        $items = [];
        $this->assertEquals(0.0, ProductService::total($items));
    }
}
