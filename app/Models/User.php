<?php

namespace App\Models;
use App\Traits\HasApiTokens;

class User extends DB
{
    use HasApiTokens;
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
        $this->createApiTokens($userId);
        return true;

    }
    public function getUser(string $email, string $password )
    {
        $query = "SELECT * FROM users WHERE email = :email";
        $stmt = $this->conn->prepare($query);
        $stmt->execute(['email' => $email]);
        $user = $stmt->fetch();
        if($user && password_verify($password, $user['password'])){
            $this->createApiTokens($user['id']);
            return $user;

        }

    }

}