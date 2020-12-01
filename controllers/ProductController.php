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
        echo $productCode;
        return true;
    }
}
