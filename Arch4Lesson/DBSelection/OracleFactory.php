<?php


class OracleFactory extends DBSelect
{

    public function DBConnection(): DataBase
    {
        return new Oracle();
    }

    public function DBRecord(): DBRecord
    {
        return new OracleRecord();
    }

    public function DBQuery(): DBQueryBuilder
    {
        return new OracleQuery();
    }
}