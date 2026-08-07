<?php
    // Database connection parameters
    $host = "localhost";
    $dbname = "school";
    $username = "root";
    $password = "";

    try{
        $pdo = new pdo(
           "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
            $username,
            $password
        );

        $pdo->setAttribute(
            PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION
        );

        $sql ="
        INSERT INTO student (name,email,age)
        VALUES ('ตกเตียง ตอนนอนเสื่อ', 'example3@email.com', 21)
        ";

        $pdo->exec($sql);
        echo "เพิ่มข้อมูลสำเร็จแล้ว";
    }catch(PDOException $e){
        echo "เกิดข้อผิดพลาด : " . $e->getMessage();
    }
?>
