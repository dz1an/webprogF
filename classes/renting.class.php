<?php

require_once 'database.php';

class Renting{
    //attributes

    public $id;
    public $user;
    public $girl;

    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }


    function add(){
        $sql = "INSERT INTO renting (user, girl) VALUES
        (:user, :girl);";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':user', $this->user);
        $query->bindParam(':girl', $this->girl);

        if($query->execute()){
            return true;
        }
        else{
            return false;
        }
    }
    function show(){
        $sql = "SELECT * FROM renting;";
        $query=$this->db->connect()->prepare($sql);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }


}

?>