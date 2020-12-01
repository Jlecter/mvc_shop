<?php

/**
 * Function __autoload to automatically connect classes
 */
function __autoload($class_name)
{
    // Array of folders that may contain the required classes
    $array_paths = array(
        '/models/',
        '/components/',
        '/controllers/',
    );

    // Go through an array of folders
    foreach ($array_paths as $path) {

        // Form the name and path to the file with the class
        $path = ROOT . $path . $class_name . '.php';

        // If such a file exists, connect it
        if (is_file($path)) {
            require_once $path;
        }
    }
}

spl_autoload_register('__autoload');