<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
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
        .info-item {
            margin: 15px 0;
            padding: 10px;
            background: #f8f9fa;
            border-left: 4px solid #007bff;
            border-radius: 4px;
        }
        .label {
            font-weight: bold;
            color: #495057;
        }
        .value {
            color: #28a745;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div style="text-align: center; margin-bottom: 20px;">
            <a href="index.php?page=home" style="color: #007bff; text-decoration: none; margin: 0 10px; padding: 8px 16px; border: 1px solid #007bff; border-radius: 4px;">🏠 Home</a>
            <a href="index.php?page=products" style="color: #007bff; text-decoration: none; margin: 0 10px; padding: 8px 16px; border: 1px solid #007bff; border-radius: 4px;">📦 Products</a>
        </div>
        
        <h1>🏠 MVC Home Page</h1>
        
        <div class="info-item">
            <div class="label">Message:</div>
            <div class="value"><?php echo $message; ?></div>
        </div>
        
        <div class="info-item">
            <div class="label">Student Info:</div>
            <div class="value"><?php echo $studentInfo; ?></div>
        </div>
    </div>
</body>
</html>