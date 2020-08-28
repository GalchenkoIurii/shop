<?php
/**
 * Created by PhpStorm.
 * User: Iurii
 * Date: 28.08.2020
 * Time: 19:58
 */

namespace shop;


class Db
{
    use TSingletone;

    protected function __construct()
    {
        $db = require_once CONFIG . '/config_db.php';
        class_alias('\RedBeanPHP\R', '\R');
        \R::setup($db['dsn'], $db['user'], $db['pass']);
        if (!\R::testConnection()) {
            throw new \Exception("Absent DB connection", 500);
        }
        \R::freeze(true);
        if (DEBUG) {
            \R::debug(true, 1);
        }
    }
}