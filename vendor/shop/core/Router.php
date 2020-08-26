<?php
/**
 * Created by PhpStorm.
 * User: Iurii
 * Date: 26.08.2020
 * Time: 17:26
 */

namespace shop;


class Router
{
    protected static $routes = [];
    protected static $route = [];

    public static function add($regexp, $route = [])
    {
        self::$routes[$regexp] = $route;
    }

    public static function getRoutes()
    {
        return self::$routes;
    }

    public static function getRoute()
    {
        return self::$route;
    }

    public static function dispatch($url)
    {
        if (self::matchRoute($url)) {
            $controller = 'app\controllers\\' . self::$route['prefix']
                . self::$route['controller'] . 'Controller';
        } else {
            throw new \Exception('Page not found', 404);
        }
    }

    public static function matchRoute($url)
    {
        foreach (self::$routes as $pattern => $route) {
            if (preg_match("#{$pattern}#", $url, $matches)) {
                foreach ($matches as $k => $v) {
                    if (is_string($k)) {
                        $route[$k] = $v;
                    }
                }
                if (empty($route['action'])) {
                    $route['action'] = 'index';
                }
                if (!isset($route['prefix'])) {
                    $route['prefix'] = '';
                } else {
                    $route['prefix'] .= '\\';
                }
                $route['controller'] = self::upperCamelCase($route['controller']);
                self::$route = $route;
                debug(self::$route);
                return true;
            }
        }
        return false;
    }

    protected static function upperCamelCase($name)
    {
        debug($name);
    }

    protected static function lowerCamelCase($name)
    {

    }
}