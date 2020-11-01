<?php
/**
 * Created by PhpStorm.
 * User: Юрий
 * Date: 11.03.2019
 * Time: 9:40
 */

namespace app\model;


class Cart extends DbModel
{
    public $id;
    public $id_session;
    public $id_good;
    public $quantity;
    protected $db;
/*
    /**
     * cart constructor.
     * @param $id
     * @param $id_good
     * @param $quantity
     * @param $db
     */
 /*   public function __construct(Db1 $db)
    {

        $this->db = $db;
    }
*/
    /**
     * cart constructor.
     * @param $db
     */


    public function calcSum()
    {
        echo "Summary function";
    }
    public function addGoodToCart (){
        echo "Adding good to cart function";
    }
    public function deleteCart(){
        echo "Delete good from cart";
    }
    public static function getTableName()
    {
        // TODO: Implement getTableName() method.
        return "cart";
    }

}
