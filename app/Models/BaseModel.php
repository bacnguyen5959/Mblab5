<?php

namespace App\Models;

use PDO;
use PDOException;

class BaseModel 
{
    protected $pdo;
    
    public function __construct() 
    {
        $this->connect();
    }
    
    private function connect() 
    {
        $host = 'localhost';
        $dbname = 'qlbanhang';
        $username = 'root';
        $password = '';
        
        try {
            $this->pdo = new PDO(
                "mysql:host=$host;dbname=$dbname;charset=utf8",
                $username,
                $password,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ]
            );
        } catch (PDOException $e) {
            die("Kết nối database thất bại: " . $e->getMessage());
        }
    }
    
    protected function query($sql, $params = []) 
    {
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($params);
            return $stmt;
        } catch (PDOException $e) {
            die("Lỗi truy vấn: " . $e->getMessage());
        }
    }
}