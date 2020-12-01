<?php

/**
 * Controller ProductController
 */
class ProductController
{

    /**
     * Action for view product page
     * @param string $productCode
     */
    public function actionView(string $productCode)
    {
        if ($productCode){
            $item = Product::getProductByCode($productCode);
            echo '<pre>';
            print_r($item);
            echo '</pre>';
        }
    }

}
