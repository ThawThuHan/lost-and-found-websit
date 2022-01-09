<?php

namespace Libs\Database;

use PDOException;

class UserTable
{
    private $db = null;

    public function __construct(MySQL $db)
    {
        $this->db = $db->connect();
    }

    public function insert($data)
    {
        try {
            $query = "INSERT INTO users (name, email, password, phone, address, created_at) VALUES (:name, :email, :password, :phone, :address, NOW())";
            $statement = $this->db->prepare($query);
            $statement->execute($data);
            return $this->db->lastInsertId();
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function update($data, $id)
    {
        // var_dump("in update");
        // var_dump($id);
        try {
            $query = "UPDATE users SET name=:name, email=:email, password=:password, phone=:phone, address=:address WHERE id=$id";
            $statement = $this->db->prepare($query);
            $statement->execute($data);
            return $statement->rowCount();
        } catch (PDOException $e) {
            var_dump($e->getMessage());
            return false;
        }
    }

    public function findByEmailAndPassword($email, $password)
    {
        $statement = $this->db->prepare("SELECT users.* FROM users WHERE users.email=:email AND users.password=:password");
        $statement->execute([
            ":email" => $email,
            ":password" => $password,
        ]);
        $row = $statement->fetch();
        return $row ?? false;
    }
}
