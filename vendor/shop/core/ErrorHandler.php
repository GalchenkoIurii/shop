<?php
/**
 * Created by PhpStorm.
 * User: Iurii
 * Date: 26.08.2020
 * Time: 8:18
 */

namespace shop;


class ErrorHandler
{
    public function __construct()
    {
        if (DEBUG) {
            error_reporting(-1);
        } else {
            error_reporting(0);
        }
        set_exception_handler([$this, 'exceptionHandler']);
    }

    public function exceptionHandler($e)
    {

    }

    protected function logErrors($message = '', $file = '', $line = '')
    {
        error_log("[" . date('Y-m-d H:i:s') . "] Error text: {$message} | File: {$file} | 
            Line: {$line}\n----------------------\n", 3, ROOT . '/tmp/errors.log');
    }

    protected function displayError($errno, $errstr, $errfile, $errline, $response = 404)
    {
        
    }
}