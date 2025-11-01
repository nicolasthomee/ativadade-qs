<?php

namespace App\Services;

class ProductService
{
    /**
     * Calcula o valor total de uma lista de produtos.
     *
     * Cada item do array deve ter a forma:
     * [
     *   'name' => 'Produto A',
     *   'price' => 10.50,
     *   'quantity' => 2
     * ]
     *
     * Se 'quantity' não for informado, assume 1.
     *
     * @param array $items
     * @return float
     */
    public static function total(array $items): float
    {
        $total = 0.0;
        foreach ($items as $it) {
            $price = isset($it['price']) ? (float) $it['price'] : 0.0;
            $qty = isset($it['quantity']) ? (int) $it['quantity'] : 1;
            $total += $price * $qty;
        }
        // arredonda para 2 decimais
        return round($total, 2);
    }
}
