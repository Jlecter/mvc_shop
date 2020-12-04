<?php

namespace app\models;

/**
 * Class DB
 * Database component
 */
class DB
{

    /**
     * Simulating of data from database tables
     * @param array $items
     */
    protected static $items = [
        'ZA' => '£2.00', // 4 for £7.00
        'YB' => '£12.00',
        'FC' => '£1.25', // £6 for a six pack
        'GD' => '£0.15'
    ];

    /**
     * Simulating of method getConnection() and query to DB via PDO
     * @return array
     */
    public static function getProducts()
    {
        return DB::$items;
    }

}
