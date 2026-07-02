<?php
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $name = $_GET['username']??'';
    $lastname = $_GET['lastname']??'';
    $userpass = $_GET['userpass']??'';
    $email = $_GET['useremail']??'';
    $age = $_GET['number']??'';
    $gender = $_GET['gender']??'';
    $birthdate = $_GET['birthdate']??'';
    $province = $_GET['province']??'';
    $hobbies = isset($_GET['hobby']) ? $_GET['hobby'] : [];
    $userMsg = $_GET['userMsg']??'';
    }
    echo "ชื่อ: $name<br>";
    echo "สกุล: $lastname<br>";
    echo "รหัสผ่านคือ: $userpass<br>";
    echo "อีเมลคือ: $email<br>";
    echo "อายุ: $age<br>";
    echo "เพศ: $gender<br>";
    echo "วันเกิด: $birthdate<br>";
    echo "จังหวัด: $province<br>";
    echo "งานอดิเรกที่เลือก: " . implode(", ", $hobbies) . "<br>";
    echo "ความคิดเห็น: $userMsg<br>";


    
?>