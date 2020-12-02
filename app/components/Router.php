<?php

namespace app\components;

/**
 * Class Router
 * Component for working with routes
 */
class Router
{

    /**
     * Property for storing an array of routes
     * @var array 
     */
    private $routes;

    /**
     * Constructor
     */
    public function __construct()
    {
        // The path to the file with routes
        $routesPath = ROOT . '/app/config/routes.php';

        // Getting routes from a file
        $this->routes = require_once($routesPath);
    }

    /**
     * Returns the query string
     * @return string
     */
    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    /**
     * Method for handling the request
     */
    public function run()
    {
        // Get the query string
        $uri = $this->getURI();

        // Checking the presence of such a request in the routes array (routes.php)
        foreach ($this->routes as $uriPattern => $path) {

            //Compare $uriPattern and $uri
            if (preg_match("~$uriPattern~", $uri)) {

                // Get the inner path from the outer according to the rule.
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

                // Define controller, action, parameters

                $segments = explode('/', $internalRoute);

                $controllerName = array_shift($segments) . 'Controller';
                $controllerName = 'app\\controllers\\' . ucfirst($controllerName);

                $actionName = 'action' . ucfirst(array_shift($segments));

                $parameters = $segments;

                // Creation of object, call method (action)
                $controllerObject = new $controllerName;

                /* Call the required method ($actionName) at a certain
                 * class ($controllerObject) with given ($parameters) parameters
                 */
                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);

                //If the controller method is successfully called, we exit the router.
                if ($result != null) {
                    break;
                }
            }
        }
    }

}
