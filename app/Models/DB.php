<?php

namespace App\Models;

use PDO;

class DB
{
    private $localhost;
    private $user;
    private $pass;
    private $db_name;
    protected PDO $conn;

    public function __construct()
    {
        $this->localhost = $_ENV['DB_HOST'];
        $this->user = $_ENV['DB_USER'];
        $this->pass = $_ENV['DB_PASS'];
        $this->db_name = $_ENV['DB_NAME'];
        $this->conn = new PDO("mysql:host=$this->localhost;dbname=$this->db_name", $this->user, $this->pass);
    }
}