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
    }
}