<?php

namespace app\model;

class Products extends DbModel
{
    public $id;
    public $name;
    public $img;
    public $description;
    public $price;

    /**
     * Products constructor.
     * @param $id
     * @param $name
     * @param $img
     * @param $description
     * @param $price
     */
    public function __construct($id = null, $name = null, $img = null, $description = null, $price = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->img = $img;
        $this->description = $description;
        $this->price = $price;
    }


    public static function getTableName()
    {
        return "goods";
    }

}