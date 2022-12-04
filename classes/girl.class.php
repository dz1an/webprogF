<?php

require_once 'database.php';

class Girls{
    //attributes

    public $id;
    public $firstname;
    public $lastname;
    public $age;
    public $skin_type;
    public $breast_size;
    public $waist_line;
    public $height;
    public $rate;
    public $description;
    public $image;

    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }


    function add(){
        $sql = "INSERT INTO girls (firstname, lastname, age, skin_type, breast_size, waist_line, height, rate, description, image) VALUES
        (:firstname, :lastname, :age, :skin_type, :breast_size, :waist_line, :height, :rate, :description, :image);";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':firstname', $this->firstname);
        $query->bindParam(':lastname', $this->lastname);
        $query->bindParam(':age', $this->age);
        $query->bindParam(':skin_type', $this->skin_type);
        $query->bindParam(':breast_size', $this->breast_size);
        $query->bindParam(':waist_line', $this->waist_line);
        $query->bindParam(':height', $this->height);
        $query->bindParam(':rate', $this->rate);
        $query->bindParam(':description', $this->description);
        $query->bindParam(':image', $this->image);

        if($query->execute()){
            return true;
        }
        else{
            return false;
        }
    }

    function edit(){
        $sql = "UPDATE girls SET firstname=:firstname, lastname=:lastname, age=:age, skin_type=:skin_type, breast_size=:breast_size, waist_line=:waist_line, height=:height, rate=:rate, description=:description, image=:image WHERE id = :id;";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':firstname', $this->firstname);
        $query->bindParam(':lastname', $this->lastname);
        $query->bindParam(':age', $this->age);
        $query->bindParam(':skin_type', $this->skin_type);
        $query->bindParam(':breast_size', $this->breast_size);
        $query->bindParam(':waist_line', $this->waist_line);
        $query->bindParam(':height', $this->height);
        $query->bindParam(':rate', $this->rate);
        $query->bindParam(':description', $this->description);
        $query->bindParam(':image', $this->image);
        $query->bindParam(':id', $this->id);

        if($query->execute()){
            return true;
        }
        else{
            return false;
        }
    }

    function show(){
        $sql = "SELECT * FROM girls ORDER BY firstname ASC ;";
        $query=$this->db->connect()->prepare($sql);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function delete($record_id){
        $sql = "DELETE FROM girls WHERE id = :id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':id', $record_id);
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }
    }

    function fetch($record_id){
        $sql = "SELECT * FROM girls WHERE id = :id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':id', $record_id);
        if($query->execute()){
            $data = $query->fetch();
        }
        return $data;
    }

}

?>