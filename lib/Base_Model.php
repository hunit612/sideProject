<?php
abstract class Base_Model{
    public function __construct()
    {
        $this->db = new Database(DB_VENDER,DB_HOST,DB_NAME,DB_PWD);
    }
}