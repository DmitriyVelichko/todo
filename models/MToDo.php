<?php

namespace models;

use iface\ITodo;
use classes\MainModel;

class MToDo extends MainModel implements ITodo
{
    private $model;

    public function __construct()
    {
        parent::__construct();
        $this->model = 'actionList';
    }

    public function create()
    {
        $text = $_GET['text'];

        $sql = "INSERT INTO actionList(text) VALUES(:text)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":text", $text, \PDO::PARAM_STR);
        $stmt->execute();

        return true;
    }

    public function delete()
    {
        $id = $_GET['id'];

        $sql = "DELETE FROM actionList WHERE id=:id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id",$id,\PDO::PARAM_INT);
        $stmt->execute();

        return true;
    }

    public function update()
    {
        $id = $_GET['id'];
        $text = $_GET['text'];

        $sql = "UPDATE actionList SET text=:text WHERE id=:id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id",$id,\PDO::PARAM_INT);
        $stmt->bindParam(":text",$text,\PDO::PARAM_STR);
        $stmt->execute();

        return true;
    }

    public function view(){
        $sth = $this->db->prepare("SELECT text FROM actionList");
        $sth->execute();
        return $sth->fetchAll();
    }
}
