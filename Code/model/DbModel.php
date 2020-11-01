<?php
/**
 * Created by PhpStorm.
 * User: Юрий
 * Date: 12.03.2019
 * Time: 9:38
 */

namespace app\model;

use app\engine\Db;
use app\interfaces\IModel;


abstract class DbModel extends Models implements IModel
{

    /** @var Db */
    //protected $db;

/*
    public function __construct()
    {
        $this->db = Db::getInstance();
    }
*/
    public function __call($closuire, $args)
    {
        return call_user_func_array($this->{$closuire},$args);
    }
    public static function getOne($id)
    {
        $tableName = static::getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE id = :id";
        return DB::getInstance()->queryObject($sql, ['id' => $id], static::class);
    }


    public static function getAll()
    {
        $tableName = static::getTableName();
        $sql = "SELECT * FROM {$tableName}";
        return DB::getInstance()->queryAll($sql);

    }

    public function insert()
    {
        $params = [];
        $columns = [];
        $tableName = static::getTableName();
        foreach ($this as $key => $value) {
            if ($key == "id") {
                continue;
            }
            $params[":{$key}"] = $value;
            $columns[] = $key;

        }
        $columns = implode(", ", $columns);
        $values = implode(", ", array_keys($params));

        //var_dump($this);
        $sql = "INSERT INTO {$tableName} ({$columns}) VALUES ({$values})";

        //var_dump($sql,$params);
        Db::getInstance()->execute($sql, $params);
        $this->id = Db::getInstance()->LastInsertId();


    }

    public function update(){
        $params = [];

        $sqlParam = "";
        $tableName = static::getTableName();
        foreach ($this as $key => $value) {
            if ($key == "id") {
                $id = $value;
                continue;
            }
            $sqlParam .= $key . " = " . ":" . $key . ",";

            $params[":{$key}"] = $value;



        }
        $sqlParam = substr($sqlParam,0,-1);


        $sql = "UPDATE {$tableName} SET {$sqlParam} where id = {$id}";

        Db::getInstance()->execute($sql,$params);

    }
    public function delete()
    {
        $tableName = static::getTableName();
        $sql = "DELETE FROM {$tableName} WHERE id = :id";
        return DB::getInstance()->execute($sql, ['id' => $this->id]);
    }
    public function save(){
        if (is_null($this->id)){
            //echo "inserting ton DB";
            $this->insert();
        } else {
            //echo " Updating DB";
            $this->update();
        }

    }
    public static function getCountWhere($field,$value)
    {
        $tableName = static::getTableName();
        $sql = "SELECT count(*) as 'count' from {$tableName} where `$field` = :$field";
        $result = Db::getInstance()->queryOne($sql, ["$field"=>$value])['count'];
        //var_dump($sql,$result);

        return $result;
    }

    public static function getOneWhere($field,$value)
    {
        $tableName = static::getTableName();
        $sql = "SELECT *  from {$tableName} where `$field` = :$field";
        $result = Db::getInstance()->queryObject($sql, ["$field"=>$value],static::class);
        //var_dump($sql,$result);
        // die();
        return $result;
    }

    abstract static public function getTableName();
}