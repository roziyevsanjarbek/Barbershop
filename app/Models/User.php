<?php

namespace App\Models;

class User extends DB
{
    public function create(string $fullName,string $email,string $password)
    {
        $query = "INSERT INTO users (full_name, email, password, updated_at, created_at)
            VALUES(:fullName, :email, :password, NOW(), NOW())";
        $stmt = $this->conn->prepare($query)->execute([
            ":fullName" => $fullName,
            ":email" => $email,
            ":password" => password_hash($password, PASSWORD_DEFAULT)
        ]);
        $userId = $this->conn->lastInsertId();
        return true;

    }
}