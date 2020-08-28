<?php
/**
 * Created by PhpStorm.
 * User: Iurii
 * Date: 26.08.2020
 * Time: 22:47
 */

namespace app\controllers;


use shop\App;

class MainController extends AppController
{
    public function indexAction()
    {
        $this->setMeta(
            App::$app->getProperty('site_name') . ' | ' . 'Главная',
            'Описание',
            'Ключевые слова'
        );
    }
}