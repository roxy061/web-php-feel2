<?php
    $name = $_GET['username'];
    $name = $_GET['lastname'];
    $password = $_GET['userPass'];
    $email = $_GET['useremail'];
    $age = $_GET['age'];
    $gender = $_GET['gender'];
    $birthdate = $_GET['birthdate'];
    $message = $_GET['message'];
    $province = $_GET['province'];
    $hobbies = isset($_GET['hobby']) ? $_GET['hobby'] : [];

    echo "ชื่อ $name";
    echo "สกุล $name<br>";
    echo "รหัสผ่านที่ป้อนคือ: $password<br>";
    echo "อีเมลที่ป้อนคือ: $email<br>";
    echo "อายุ: $age<br>";
    echo "เพศ: $gender<br>";
    echo "วันเกิด: $birthdate<br>";
    echo "ความคิดเห็น: $message<br>";
    echo "จังหวัด: $province<br>";
    echo "งานอดิเรกที่เลือก: " . implode(", ", $hobbies) . "<br>";

    
?>