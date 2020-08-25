<?php
/**
 * Created by PhpStorm.
 * User: Iurii
 * Date: 24.08.2020
 * Time: 21:23
 */

namespace shop;


class Registry
{
    use TSingletone;

    protected static $properties = [];

    public function setProperty($name, $value)
    {
        self::$properties[$name] = $value;
    }

    public function getProperty($name)
    {
        if (isset(self::$properties[$name])) {
            return self::$properties[$name];
        }
        return null;
    }

    public function getProperties()
    {
        return self::$properties;
    }
}