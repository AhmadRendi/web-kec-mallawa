<?php

class User {

    private $table = 'user';

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function addUser($data){
        try{
            $query = "INSERT INTO $this->table (username, password, role, name_user, email, address, position, picture) "
            . "VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

            $this->db->query($query);

            $this->db->bind(1, $data['username']);
            $this->db->bind(2, $data['password']);
            $this->db->bind(3, $data['role']);
            $this->db->bind(4, $data['name_user']);
            $this->db->bind(5, $data['email']);
            $this->db->bind(6, $data['address']);
            $this->db->bind(7, $data['position']);
            $this->db->bind(8, $data['picture']);

            $this->db->execute();

            return $this->db->rowCount();
        }catch(PDOException $e){
            throw new PDOException($e->getMessage());
        }
    }

    public function getAll(){
        try{
            $query = "SELECT * FROM $this->table";

            $this->db->query($query);

            return $this->db->resultSet();
        }catch(PDOException $e){
            throw new PDOException($e->getMessage());
        }
    }

    public function getUsername($username){
        try{
            $query = "SELECT * FROM $this->table WHERE username = ?";

            $this->db->query($query);

            $this->db->bind(1, $username);

            return $this->db->single();
        }catch(PDOException $e){
            throw new PDOException($e->getMessage());
        }
    }

    public function getEmail($email){
        try{
            $query = "SELECT * FROM $this->table WHERE email = ?";

            $this->db->query($query);

            $this->db->bind(1, $email);

            return $this->db->single();
        }catch(PDOException $e){
            throw new PDOException($e->getMessage());
        }
    }

}