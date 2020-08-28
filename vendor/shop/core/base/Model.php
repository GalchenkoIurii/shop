<?php
/**
 * Created by PhpStorm.
 * User: Iurii
 * Date: 28.08.2020
 * Time: 19:36
 */

namespace shop\base;


class Model
{
    public $attributes = [];
    public $errors = [];
    public $rules = [];

    public function __construct()
    {
    }
}