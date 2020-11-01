<?php


namespace app\engine;
use app\traits\Tsingleton;

class Db
{
    use Tsingleton;
    private $config = [
        'driver' => 'mysql',
        'host' => 'localhost:3307',
        'login' => 'root',
        'password' => '',
        'database' => 'gallery',
        'charset' => 'utf8'
    ];

    private $connection = null;



    private function getConnection()
    {

        if (is_null($this->connection)) {
            //var_dump("Enable");
            //echo $this->prepareDSNstr();


            $this->connection = new \PDO($this->prepareDSNstr(),
                $this->config['login'],
                $this->config['password']
            );
            //var_dump("Connecting to database");
            $this->connection->setAttribute(
                \PDO::ATTR_DEFAULT_FETCH_MODE,
                \PDO::FETCH_ASSOC);
        }
        return $this->connection;
    }

    private function prepareDSNstr()
    {


        return sprintf("%s:host=%s;dbname=%s;charset=%s",
            $this->config['driver'],
            $this->config['host'],
            $this->config['database'],
            $this->config['charset']
        );

    }
    private function query($sql,$params){
        $pdoStatement = $this->getConnection()->prepare($sql);
        $pdoStatement ->execute($params);
        return $pdoStatement;
    }
    // Make object from array
    public function queryObject($sql,$params,$class){
        $pdoStatement = $this->query($sql,$params);
        $pdoStatement->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE,$class);
        return $pdoStatement->fetch();
    }

    public function execute($sql,$params){
        $this->query($sql,$params);
        return true;
    }

    public function queryOne($sql, $param = [])
    {
        //return $this->query($sql,$param)->fetchAll()[0];
        return $this->queryAll($sql,$param)[0];
    }

    public function queryAll($sql, $param = [])
    {
       // echo "Db executing";
        return $this->query($sql,$param)->fetchAll();

    }
    public function __toString()
    {
        // TODO: Implement __toString() method.
        return Db;
    }
    public function lastInsertId(){
        return $this->connection->lastInsertId();
    }
}