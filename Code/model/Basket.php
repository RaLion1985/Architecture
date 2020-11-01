<?php


namespace app\model;

use app\engine\Db;

class Basket extends DbModel
{
    public $id;
    public $session_id;
    public $product_id;

    /**
     * Basket constructor.
     * @param $id
     * @param $session_id
     * @param $product_id
     */
    public function __construct($id = null, $session_id = null, $product_id = null)
    {
        $this->id = $id;
        $this->session_id = $session_id;
        $this->product_id = $product_id;
    }


    public static function getBasket($session)
    {
        $sql = "SELECT p.id id_product, b.id id_basket,p.name,p.description,p.price,p.img img  FROM basket b,goods p WHERE b.product_id=p.id AND session_id= :session";
        return Db::getInstance()->queryAll($sql, ['session' => $session]);
    }

    public static function getTableName()
    {
        // TODO: Implement getTableName() method.
        return "basket";
    }
}

