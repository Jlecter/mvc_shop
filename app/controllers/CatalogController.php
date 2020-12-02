<?php

namespace app\controllers;

use app\models\Product;

/**
 * Controller CatalogController
 * Catalog
 */
class CatalogController
{

    /**
     * Action для страницы "Каталог товаров"
     */
    public function actionIndex()
    {
        // Get list
        $products = Product::getProductsList();

        // Connect view
        require_once(ROOT . '/app/views/catalog/index.php');
        return true;
    }

}