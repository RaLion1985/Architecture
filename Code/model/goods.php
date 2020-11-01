<?php
/**
 * Created by PhpStorm.
 * User: Юрий
 * Date: 15.03.2019
 * Time: 14:13
 */

namespace app\model;


class Goods extends DbModel
{
    public $id;
    public $img;
    public $name;
    public $price;
    public $description;
    public $popular;

    public static function getTableName(){
        // TODO: Implement getTableName() method.
        return "goods";
    }
}