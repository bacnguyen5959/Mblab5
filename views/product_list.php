<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
        }
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        .product-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            background: #f9f9f9;
            transition: transform 0.2s, box-shadow 0.2s;
            text-align: center;
        }
        .product-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        .product-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 6px;
            margin-bottom: 15px;
        }
        .product-id {
            font-weight: bold;
            color: #007bff;
            font-size: 14px;
            margin-bottom: 8px;
        }
        .product-name {
            font-size: 16px;
            color: #333;
            margin-bottom: 10px;
            font-weight: 500;
            min-height: 40px;
        }
        .product-price {
            font-size: 18px;
            color: #28a745;
            font-weight: bold;
            margin-bottom: 8px;
        }
        .product-quantity {
            color: #6c757d;
            font-size: 14px;
        }
        .no-products {
            text-align: center;
            color: #6c757d;
            font-style: italic;
            margin-top: 50px;
        }
        .nav-links {
            text-align: center;
            margin-bottom: 20px;
        }
        .nav-links a {
            color: #007bff;
            text-decoration: none;
            margin: 0 10px;
            padding: 8px 16px;
            border: 1px solid #007bff;
            border-radius: 4px;
            transition: all 0.2s;
        }
        .nav-links a:hover {
            background: #007bff;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="nav-links">
            <a href="index.php?page=home">🏠 Home</a>
            <a href="index.php?page=products">📦 Products</a>
        </div>
        
        <h1>📦 Danh sách sản phẩm</h1>
        
        <?php if (!empty($products)): ?>
            <div class="product-grid">
                <?php foreach ($products as $product): ?>
                    <div class="product-card">
                        <?php if (!empty($product['HinhAnh'])): ?>
                            <img src="<?php echo htmlspecialchars($product['HinhAnh']); ?>" 
                                 alt="<?php echo htmlspecialchars($product['TenSP']); ?>" 
                                 class="product-image"
                                 onerror="this.src='https://via.placeholder.com/300x200?text=No+Image'">
                        <?php else: ?>
                            <img src="https://via.placeholder.com/300x200?text=No+Image" 
                                 alt="No Image" 
                                 class="product-image">
                        <?php endif; ?>
                        
                        <div class="product-id">
                            #<?php echo htmlspecialchars($product['MaSP']); ?>
                        </div>
                        <div class="product-name">
                            <?php echo htmlspecialchars($product['TenSP']); ?>
                        </div>
                        <div class="product-price">
                            <?php echo number_format($product['DonGia'], 0, ',', '.'); ?> VNĐ
                        </div>
                        <div class="product-quantity">
                            Còn lại: <?php echo htmlspecialchars($product['SoLuong']); ?> sản phẩm
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <div class="no-products">
                Không có sản phẩm nào trong database.
            </div>
        <?php endif; ?>
    </div>
</body>
</html>