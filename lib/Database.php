<?php
class Database extends PDO{
    public function __construct($DB_VENDER, $DB_HOST, $DB_NAME, $DB_USER, $DB_PWD)
    {
        parent::__construct($DB_VENDER .':host='.$DB_HOST .'dbname='.$DB_NAME, $DB_USER, $DB_PWDW);
    }
}