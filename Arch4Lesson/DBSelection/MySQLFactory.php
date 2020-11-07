<?php


class MySQLFactory extends DBSelect
{
    public function DBConnection() : DataBase
    {

        return new MySql();
    }

    public function DBRecord(): DBRecord
    {
        return new MysqlRecord();
    }

    public function DBQuery(): DBQueryBuilder
    {
        return new MysqlQuery();
    }
}