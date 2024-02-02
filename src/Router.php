<?php

namespace MVC;

use MVC\Request;



class Router {
    protected Request $request;
    protected array $routes = [];

    public function __construct(Request $request) {
        $this->request = $request;
        $this->routes = require_once __DIR__ . "/../routes.php";
       
    }



public function dispatch()
{
    foreach ($this->routes as $route) {
        $requestMethod = $this->request->getMethod();
        $requestUri = $this->request->getRequestUri();

        if ($route->method === $requestMethod && preg_match($route->uri, $requestUri, $matches)) {
            $controller = $route->action[0];
            $action = $route->action[1];

            $controller = new $controller();

            $params = array_slice($matches, 1);

            $controller->$action(...$params);

            return;
        }
    }


}
}