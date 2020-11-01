<?php
/**
 * Created by PhpStorm.
 * User: Юрий
 * Date: 11.03.2019
 * Time: 9:50
 */

namespace app\model;
use app\engine\Db;
class Orders extends DbModel
{
    public $id;
    public $session;
    public $name;
    public $lastname;
    public $phone;
    public $status;

    public static function getOrders()
    {
        $sql = "SELECT * from `orders` ORDER BY `orders`.id DESC";
        return Db::getInstance()->execute($sql, []);
    }
    public static function changeStatus($id) {

        $sql = "UPDATE `orders` SET `status` = 'Обработан' WHERE `orders`.`id` = :id;";
        return Db::getInstance()->execute($sql, ['id'=>$id]);
    }

    public static function getTableName()
    {
        // TODO: Implement getTableName() method.
        return "orders";
    }
    public static function makeOrder($params){
        $sql = "INSERT INTO `orders` (`session`, `name`, `lastname`, `phone`, `status`) VALUES (:id_session,:id_name,:lastname,:phone, 'Новый')";
        return Db::getInstance()->execute($sql,[
            'id_session'=>$params['session'],
            'id_name'=>$params['name'],
            'lastname'=>$params['lastname'],
            'phone'=>$params['phone'],
        ]);
    }
}
/*
class orders extends Model
{
    public $id;
    public $name;
    public $lastName;
    public $phone;
    public $status;

    protected $db;
/*
    /**
     * orders constructor.
     * @param $id
     * @param $name
     * @param $lastName
     * @param $phone
     * @param $status
     *//*
    public function __construct(Db1 $db)
    {

        $this->db = $db;
    }
*/
/*
    public function makeOrderUser(){
        echo "Make order for user";
    }
    public function getTableName()
    {
        // TODO: Implement getTableName() method.
        return "tablaName";
    }
}*/