<?php

namespace classes;

class MainModel
{
    public $db;

    public function __construct()
    {
        $this->db = DataBase::getInstance();
    }
}