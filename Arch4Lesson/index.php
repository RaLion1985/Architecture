<?php
require 'DBSelection/DBSelect.php';
require 'DBSelection/MySQLFactory.php';
require 'DBSelection/PostgreSQLFactory.php';
require 'DBSelection/OracleFactory.php';

require 'DBConnection/DataBase.php';
require 'DBConnection/MySql.php';
require 'DBConnection/PostgreSQL.php';
require 'DBConnection/Oracle.php';

require 'DBRecord/DBRecord.php';
require 'DBRecord/MysqlRecord.php';
require 'DBRecord/PostgreSQLRecord.php';
require 'DBRecord/OracleRecord.php';

require 'DBQueryBuiler/DBQueryBuilder.php';
require 'DBQueryBuiler/MysqlQuery.php';
require 'DBQueryBuiler/PostgreSQLQuery.php';
require 'DBQueryBuiler/OracleQuery.php';


/*function RunDB(DBSelect $DBName){
    $DBName->connect();
}
RunDB(new MySQLFactory());*/
$sql=new MySQLFactory();
$sql->connect();
$sql->dump();
$sql->create();
$sql->read();
$sql->update();
$sql->delete();

echo "<hr>";
$post= new PostgreSQLFactory();
$post->connect();
$post->dump();
$post->create();
$post->read();
$post->update();
$post->delete();
echo "<hr>";
$oracle= new OracleFactory();
$oracle->connect();
$oracle->dump();
$oracle->create();
$oracle->read();
$oracle->update();
$oracle->delete();