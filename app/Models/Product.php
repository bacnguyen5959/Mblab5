<?php

namespace App\Models;

class Product extends BaseModel 
{
    public function getAllProducts() 
    {
        $sql = "SELECT MaSP, TenSP, DonGia, SoLuong, HinhAnh FROM sanpham ORDER BY MaSP";
        $stmt = $this->query($sql);
        return $stmt->fetchAll();
    }
    
    public function getProductById($id) 
    {
        $sql = "SELECT * FROM sanpham WHERE MaSP = ?";
        $stmt = $this->query($sql, [$id]);
        return $stmt->fetch();
    }
}