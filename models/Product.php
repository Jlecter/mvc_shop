<?php

class Product
{

    /**
     * Returns a list of products
     * @return array
     */
    public static function getProductsList()
    {
        return DB::getProducts();
    }

    /**
     * Returns the product with the specified code
     * @param string $code
     * @return array
     */
    public static function getProductByCode(string $code)
    {
        $products = DB::getProducts();
        if (array_key_exists($code, $products)) {
            return [$code => $products[$code]];
        }
    }
}