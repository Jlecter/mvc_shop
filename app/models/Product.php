<?php

namespace app\models;

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
        if (array_key_exists($code, $products)) return [$code => $products[$code]];
    }

    /**
     * Returns the path to the image of the product that is in delivery
     * @return string
     */
    public static function getImage()
    {
        // Image title
        $noImage = 'delivery.png';

        // Product folder path
        $path = '/app/template/images/home/';

        // Product image path
        $pathToProductImage = $path . $noImage;


        if (file_exists($_SERVER['DOCUMENT_ROOT'].$pathToProductImage)) {
            // If the image for the product exists
            // return the product image path
            return $pathToProductImage;
        }

        // Return path
        return $pathToProductImage;
    }
}