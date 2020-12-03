<?php

return [
    // Product:
    'product/([A-Z][A-Z])' => 'product/view/$1', // actionView in ProductController
    // Catalog:
    'catalog' => 'catalog/index', // actionIndex in ProductController
    // Self page -> transfer to catalog
    '' => 'catalog/index'
];
