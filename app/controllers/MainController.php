<?php
/**
 * Created by PhpStorm.
 * User: Iurii
 * Date: 26.08.2020
 * Time: 22:47
 */

namespace app\controllers;


use shop\App;
use shop\Cache;

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

        $cache = Cache::instance();
        //$cache->set('test', $name);
        //$cache->delete('test');
        $data = $cache->get('test');
        if (!$data) {
            $cache->set('test', $name);
        }
        debug($data);

        $this->set(compact('name', 'age', 'posts'));
    }
}