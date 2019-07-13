<?php
require("../Model/Database.php");
class UserModel{
    public $name;
    public $email;
    public $username;
    public $password;
    public $id;
    private $db;
    private $tablename = "user";
    
    public function __construct(){
        $this->db = new Database();
    }
    public function insert(){
        $sql = "INSERT INTO $this->tablename (name, email,username,password) VALUES('$this->name','$this->email','$this->username', '$this->password')";
        return $this->db->execute($sql);
    }

    public function update($id){
        $sql = "UPDATE $this->tablename set name = 'dhan earl' where id = $id";
        return $this->db->execute($sql);
    }

    public function readAll(){
        $sql = "SELECT * FROM $this->tablename";
        return $this->db->execute($sql);
    }

    public function delete($id){
        $sql = "DELETE FROM $this->tablename where id = $id";
        return $this->db->execute($sql);
    }

    public function __destruct(){
        unset($this->db);
    }
}
?>
    
    
   

    public function __destruct(){
        unset($this->db);
    }
}
?>