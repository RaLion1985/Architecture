<?php

class PostgreSQLQuery extends DBQueryBuilder
{

    public function create()
    {
        echo "Create row in PostgreSQL <br>";
    }

    public function read()
    {
        echo "Read row from PostgreSQL <br>";
    }

    public function update()
    {
        echo "Update row from PostgreSQL <br>";
    }

    public function delete()
    {
        echo "Delete row from PostgreSQL <br>";
    }
}
