<?php

namespace app\controllers;

use app\models\Product;

/**
 * Controller ProductController
 */
class ProductController
{

    /**
     * Action for view product page
     * @param string $productCode
     * @return bool
     */
    public function actionView(string $productCode)
    {
        if ($productCode){
            // Get info
            $item = Product::getProductByCode($productCode);

            // Connect view
            require_once(ROOT . '/app/views/product/index.php');
            return true;
        }
    }

}
