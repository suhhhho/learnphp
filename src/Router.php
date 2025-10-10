<?php
namespace App;

class Router {
    private static $routes = [];

    private $path;

    public function __construct($url)
    {
        $this->path = parse_url($url, PHP_URL_PATH);
    }

    public function match(){
        foreach(self::$routes as $route) {
            if($this->path === $route['path']) {
                return $route;
            }
        }
    }

    public static function getRoutes(){
        return self::$routes;
    }

    public static function addRoute($path, $action) {
        self::$routes[] = ['path' => $path, 'action' => $action];
    }
}