<?php

namespace Libs\Database;

use PDOException;

class UsersTable
{
    private $db;

    // This is constructor
    public function __construct(MySQL $mysql)  
    {
        $this->db = $mysql->connect();
    }

    // Find User
    public function find($email, $password)
    {
        try {

            $statement = $this->db->prepare("SELECT * FROM users WHERE email=:email AND password=:password");
            $statement->execute(['email' => $email, 'password' => $password]);

            return $statement->fetch();
            
        }catch (PDOException $e) {
            echo $e->getMessage();
            exit();
        }
    }


    // Insert Data
    public function insert($data)
    {
        try {

            $statement = $this->db->prepare(
                "INSERT INTO users (name, email, password, phone, address, created_at) VALUES (:name, :email, :password, :phone, :address, Now())"
            );

            $statement->execute($data);

            return $this->db->lastInsertId();

        } catch (PDOException $e) {
            $e->getMessage();
            exit();
        }
    }

    // Update Photo
    public function updatePhoto($id, $photo)
    {
        try {

            $statement = $this->db->prepare("UPDATE users SET photo=:photo WHERE id=:id");
            $statement->execute(['id' => $id, 'photo' => $photo]);

            return $statement->rowCount();

        } catch (PDOException $e) {
            echo $e->getMessage();
            exit();
        }
    }
}