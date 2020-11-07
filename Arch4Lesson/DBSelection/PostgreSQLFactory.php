<?php


class PostgreSQLFactory extends DBSelect
{

    public function DBConnection(): DataBase
    {
        return new PostgreSQL();
    }

    public function DBRecord(): DBRecord
    {
        return new PostgreSQLRecord();
    }

    public function DBQuery(): DBQueryBuilder
    {
        return new PostgreSQLQuery();
    }
}