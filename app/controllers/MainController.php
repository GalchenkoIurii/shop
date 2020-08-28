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
        $posts = \R::findAll('test');
        $post = \R::findOne('test', 'id = ?', [2]);
        $this->setMeta(
            App::$app->getProperty('site_name') . ' | ' . 'Главная',
            'Описание',
            'Ключевые слова'
        );
        $name = 'Jack';
        $age = 30;
        $this->set(compact('name', 'age', 'posts'));
    }
}