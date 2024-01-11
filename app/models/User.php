<?php

class User{

    private $db;

    public function __construct(){
        $this->db = Database::getInstance();
    }

    public function fetch($email)
    {
        $this->db->query('SELECT * FROM users WHERE email = :email');
        $this->db->bind(':email', $email);
        return $this->db->single();
    }
    public function insert($fname,$lname,$image,$email,$password){
            $sql= "INSERT INTO users (fname,lname,image,email,password,role) VALUES(:fname,:lname,:image,:email,:password, 0)";
            $this->db->query($sql);
            $this->db->bind(":fname", $fname);
            $this->db->bind(":lname", $lname);
            $this->db->bind(":image", $image);
            $this->db->bind(":email", $email);
            $this->db->bind(":password", $password);
            $this->db->execute();
    }



}