<?php
/**
 * Created by PhpStorm.
 * User: Iurii
 * Date: 28.08.2020
 * Time: 11:23
 */

namespace app\controllers;


use app\models\AppModel;
use shop\base\Controller;

class AppController extends Controller
{
    public function __construct($route)
    {
        parent::__construct($route);
        new AppModel();
    }
}