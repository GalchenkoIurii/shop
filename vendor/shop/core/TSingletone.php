<?php
/**
 * Created by PhpStorm.
 * User: Iurii
 * Date: 25.08.2020
 * Time: 21:15
 */

namespace shop;


trait TSingletone
{
    private static $instance;

    public static function instance()
    {
        if (self::$instance === null) {
            self::$instance = new self;
        }
        return self::$instance;
    }
}