<?php


class MysqlQuery extends DBQueryBuilder {

    public function create()
    {
        echo "Create row in Mysql <br>";
    }

    public function read()
    {
        echo "Read row from Mysql <br>";
    }

    public function update()
    {
        echo "Update row from Mysql <br>";
    }

    public function delete()
    {
        echo "Delete row from Mysql <br>";
    }
}