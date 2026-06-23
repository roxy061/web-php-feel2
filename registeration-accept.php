<?php
    $name = $_GET["name"];
    $email = $_GET["email"];
    $phone = $_GET["phone"];
    $password = $_GET["password"];
    $expected_salary = $_GET["expected_salary"];
    $start_date = $_GET["start_date"];
    $gender = $_GET["gender"];
    $position = $_GET["position"];
    $skills = isset($_GET["skills"]) ? implode(", ", $_GET["skills"]) : "ไม่เลือก";
    $userMsg = $_GET["userMsg"];

    echo "<h2>ข้อมูลที่ส่งมา:</h2>";
    echo "<p><strong>ชื่อ-นามสกุล:</strong> " . $name . "</p>";
    echo "<p><strong>อีเมล:</strong> " . $email . "</p>";
    echo "<p><strong>เบอร์โทรศัพท์:</strong> " . $phone . "</p>";
    echo "<p><strong>เงินเดือนที่คาดหวัง:</strong> " . $expected_salary . "</p>";
    echo "<p><strong>วันที่เริ่มงานได้:</strong> " . $start_date . "</p>";
    echo "<p><strong>เพศ:</strong> " . $gender . "</p>";
    echo "<p><strong>ตำแหน่งที่สนใจ:</strong> " . $position . "</p>";
    echo "<p><strong>ทักษะความสามารถ:</strong> " . $skills . "</p>";
    echo "<p><strong>แนะนำตัวเพิ่มเติม:</strong> " . $userMsg . "</p>";
?>