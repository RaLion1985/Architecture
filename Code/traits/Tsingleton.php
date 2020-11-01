<?php
/**
 * Created by PhpStorm.
 * User: Юрий
 * Date: 15.03.2019
 * Time: 13:40
 */

namespace app\traits;


trait Tsingleton
{
    private static $instance = null;

    public static function getInstance(){

        if (is_null(static::$instance)){

            static::$instance = new static();
        }
        return static::$instance;
    }

    public function __construct()   {     }
    private function __clone()   {    }
    private function __wakeup()   {    }
}