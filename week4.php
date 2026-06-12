<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Functions - สูตรคูณและการบวกเลข</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            max-width: 1000px;
            width: 100%;
        }
        
        .card {
            background: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }
        
        h2 {
            color: #333;
            margin-bottom: 20px;
            font-size: 24px;
            border-bottom: 3px solid #667eea;
            padding-bottom: 10px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: 600;
        }
        
        input[type="number"] {
            width: 100%;
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s;
        }
        
        input[type="number"]:focus {
            outline: none;
            border-color: #667eea;
        }
        
        button {
            width: 100%;
            padding: 12px;
            background: #667eea;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s;
        }
        
        button:hover {
            background: #764ba2;
        }
        
        .result {
            margin-top: 25px;
            background: #f8f9fa;
            padding: 20px;
            border-radius: 5px;
            border-left: 4px solid #667eea;
        }
        
        .result h3 {
            color: #333;
            margin-bottom: 15px;
            font-size: 18px;
        }
        
        .result-content {
            color: #666;
            line-height: 1.8;
        }
        
        .table-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 8px;
            margin-top: 10px;
        }
        
        .table-row {
            padding: 8px;
            background: white;
            border-radius: 3px;
            text-align: center;
            font-weight: 500;
            color: #667eea;
        }
        
        .answer-box {
            background: #e8f4f8;
            padding: 15px;
            border-radius: 5px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            color: #764ba2;
        }
        
        .error {
            color: #dc3545;
            background: #f8d7da;
            padding: 12px;
            border-radius: 5px;
            margin-top: 15px;
            border-left: 4px solid #dc3545;
        }
        
        @media (max-width: 768px) {
            .container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Function 1: Multiplication Table -->
        <div class="card">
            <h2>📊 สูตรคูณ</h2>
            <form method="POST">
                <div class="form-group">
                    <label for="multiply_number">ป้อนตัวเลข:</label>
                    <input type="number" id="multiply_number" name="multiply_number" min="1" max="12" placeholder="ป้อนตัวเลข 1-12">
                </div>
                <button type="submit" name="multiply_btn">แสดงสูตรคูณ</button>
            </form>
            
            <?php
            if (isset($_POST['multiply_btn']) && !empty($_POST['multiply_number'])) {
                $num = intval($_POST['multiply_number']);
                
                if ($num >= 1 && $num <= 12) {
                    echo '<div class="result">';
                    echo '<h3>สูตรคูณ ' . $num . '</h3>';
                    echo '<div class="table-grid">';
                    
                    for ($i = 1; $i <= 12; $i++) {
                        $result = $num * $i;
                        echo '<div class="table-row">' . $num . ' × ' . $i . ' = ' . $result . '</div>';
                    }
                    
                    echo '</div>';
                    echo '</div>';
                } else {
                    echo '<div class="error">⚠️ กรุณาป้อนตัวเลขระหว่าง 1-12</div>';
                }
            }
            ?>
        </div>
        
        <!-- Function 2: Add Two Numbers -->
        <div class="card">
            <h2>➕ บวกเลขสองตัว</h2>
            <form method="POST">
                <div class="form-group">
                    <label for="num1">ตัวเลขที่ 1:</label>
                    <input type="number" id="num1" name="num1" placeholder="ป้อนตัวเลขแรก">
                </div>
                <div class="form-group">
                    <label for="num2">ตัวเลขที่ 2:</label>
                    <input type="number" id="num2" name="num2" placeholder="ป้อนตัวเลขที่สอง">
                </div>
                <button type="submit" name="add_btn">หาผลบวก</button>
            </form>
            
            <?php
            if (isset($_POST['add_btn']) && !empty($_POST['num1']) && !empty($_POST['num2'])) {
                $num1 = floatval($_POST['num1']);
                $num2 = floatval($_POST['num2']);
                $sum = $num1 + $num2;
                
                echo '<div class="result">';
                echo '<h3>ผลลัพธ์การบวก</h3>';
                echo '<div class="result-content">';
                echo '<p>' . $num1 . ' + ' . $num2 . ' = </p>';
                echo '<div class="answer-box">' . $sum . '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</body>
</html>
