<?php


abstract class DBSelect
{
    private DataBase $database;
    private DBRecord $dbrecord;
    private DBQueryBuilder $dbquery;
    public function __construct()
    {
        $this->database= $this->DBConnection();
        $this->dbrecord= $this->DBRecord();
        $this->dbquery= $this->DBQuery();
    }


    public function connect(){
        $this->database->DBConnection();

    }
    public function dump ()
    {
        $this->dbrecord->dumprecord();
    }

    public function create(){
        $this->dbquery->create();
    }
    public function read(){
        $this->dbquery->read();
    }
    public function update(){
        $this->dbquery->update();
    }
    public function delete(){
        $this->dbquery->delete();
    }

    abstract public function DBConnection() : DataBase;
    abstract public function DBRecord() : DBRecord;
    abstract public function DBQuery() : DBQueryBuilder;
}