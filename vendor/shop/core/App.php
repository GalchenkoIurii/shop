<?php
/**
 * Created by PhpStorm.
 * User: Iurii
 * Date: 24.08.2020
 * Time: 21:08
 */

namespace shop;


class App
{
    public static $app;

    public function __construct()
    {
        $query = trim($_SERVER['QUERY_STRING'], '/');
        session_start();
    }
}