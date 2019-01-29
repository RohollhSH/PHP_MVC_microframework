<?php
/**
 * Created by PhpStorm.
 * User: Rohollah
 * Date: 01/05/2019
 * Time: 09:11 PM
 */

namespace App\Services\Router;


use App\Core\Request;
use App\Services\View\View;

class Router
{
    private static $routes;
    private static $base_controller = "App" . DS . "Controllers" . DS;
    private static $base_middleware = "App" . DS . "Middleware" . DS;

    private function __construct()
    {
    }

    public static function dispatch()
    {
        self::$routes = include_once ABSPATH . DS . "routes" . DS . "web.php";
        //get Current Route
        $current_route = self::getCurrentRoute();
        if (self::isRouteDefined($current_route)) {
            if (!in_array(strtolower($_SERVER['REQUEST_METHOD']),self::getRouteHttpMethods($current_route)))
            {
                echo "invalid request method!";
                exit;
            }



            //controller
            list($route_target_controller,$route_target_method) = explode('@',self::getRouteTarget($current_route));
            $route_target_controller = self::$base_controller.$route_target_controller;
            $controller     = new $route_target_controller();
            if (method_exists($controller,$route_target_method)) {
                // middleware
                $request = new Request();
                $middleware_class = self::$base_middleware . self::getRouteMiddleware($current_route);
                if (class_exists($middleware_class)) {
                    $middleware_instance = new $middleware_class;
                    $middleware_instance->handle($request);
                }
                $controller->$route_target_method($request);
            }else{
                echo "invalid method for this controller";
            }
        } else {
            View::load('errors.404');
        }

    }

    public static function getCurrentRoute()
    {
        return strtok(strtolower($_SERVER['REQUEST_URI']),"?");
    }

    public static function isRouteDefined($key)
    {
        return array_key_exists($key, self::getRoutes());
    }

    public static function getRoutes()
    {
        return self::$routes;
    }

    public static function getRouteHttpMethods($key): array {
        $routes       = self::getRoutes();
        $http_method_str   = $routes[$key]['http_method'];
        return explode("|",$http_method_str);
    }
    public static function getRouteTarget($key): string
    {
        $routes       = self::getRoutes();
        return $routes[$key]['target'];
    }
    public static function getRouteMiddleware($key)
    {
        $routes       = self::getRoutes();
        return $routes[$key]['middleware'] ?? null ;
    }
}