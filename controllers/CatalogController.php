<?php

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
        require_once(ROOT . '/views/catalog/index.php');
        return true;
    }

}