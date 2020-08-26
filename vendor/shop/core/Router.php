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
            echo 'Ok';
        } else {
            echo 'No';
        }
    }

    public static function matchRoute($url)
    {
        return true;
    }
}