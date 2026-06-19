<!DOCTYPE html>
<html lang='th'>
    <head>
        <meta charset='UTF-8'>
        <title>เว็บไซต์ ภคพล สมัยแก้ว</title>
    </head>
    <body>
        <form action="week5-receive.php" method="get">
            <label>ชื่อ</label>
            <input type="text" name="username">
            <br>

            <label>สกุล</label>
            <input type="text" name="lastname">
            <br>
            
            <label>รหัสผ่าน</label>
            <input type="password" name="userpass">
            <br>

            <label>อีเมล</label>
            <input type="email" name="useremail">
            <br>
            
            <label>อายุ</label>
            <input type="number" name="age" min="15" max="200">
            <br>

            <label>เพศ</label>
            <input type="radio" name="gender" value="ชาย"> ชาย
            <input type="radio" name="gender" value="หญิง"> หญิง
            <input type="radio" name="gender" value="เก"> เก
            <br>

            <label>วันเกิด</label>
            <input type="date" name="birthdate">
            <br>

            <label>จังหวัด</label>
            <select name="province">
                <option value="">--- เลือกจังหวัด ---</option>
                <option value="กรุงเทพฯ">กรุงเทพฯ</option>
                <option value="สมุทรปราการ">สมุทรปราการ</option>
                <option value="นนทบุรี">นนทบุรี</option>
                <option value="ปทุมธานี">ปทุมธานี</option>
                <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา</option>
                <option value="อ่างทอง">อ่างทอง</option>
                <option value="ลพบุรี">ลพบุรี</option>
                <option value="สิงห์บุรี">สิงห์บุรี</option>
                <option value="ชัยนาท">ชัยนาท</option>
                <option value="สระบุรี">สระบุรี</option>
                <option value="ชลบุรี">ชลบุรี</option>
                <option value="ระยอง">ระยอง</option>
                <option value="จันทบุรี">จันทบุรี</option>
                <option value="ตราด">ตราด</option>
                <option value="ฉะเชิงเทรา">ฉะเชิงเทรา</option>
                <option value="ปราจีนบุรี">ปราจีนบุรี</option>
                <option value="นครนายก">นครนายก</option>
                <option value="สระแก้ว">สระแก้ว</option>
                <option value="นครราชสีมา">นครราชสีมา</option>
                <option value="บุรีรัมย์">บุรีรัมย์</option>
                <option value="สุรินทร์">สุรินทร์</option>
                <option value="ศรีสะเกษ">ศรีสะเกษ</option>
                <option value="อุบลราชธานี">อุบลราชธานี</option>
                <option value="ยโสธร">ยโสธร</option>
                <option value="ชัยภูมิ">ชัยภูมิ</option>
                <option value="อำนาจเจริญ">อำนาจเจริญ</option>
                <option value="หนองบัวลำภู">หนองบัวลำภู</option>
                <option value="ขอนแก่น">ขอนแก่น</option>
                <option value="อุดรธานี">อุดรธานี</option>
                <option value="เลย">เลย</option>
                <option value="หนองคาย">หนองคาย</option>
                <option value="มหาสารคาม">มหาสารคาม</option>
                <option value="ร้อยเอ็ด">ร้อยเอ็ด</option>
                <option value="กาฬสินธุ์">กาฬสินธุ์</option>
                <option value="สกลนคร">สกลนคร</option>
                <option value="นครพนม">นครพนม</option>
                <option value="มุกดาหาร">มุกดาหาร</option>
                <option value="เชียงใหม่">เชียงใหม่</option>
                <option value="ลำพูน">ลำพูน</option>
                <option value="ลำปาง">ลำปาง</option>
                <option value="อุตรดิตถ์">อุตรดิตถ์</option>
                <option value="แพร่">แพร่</option>
                <option value="น่าน">น่าน</option>
                <option value="พะเยา">พะเยา</option>
                <option value="เชียงราย">เชียงราย</option>
                <option value="แม่ฮ่องสอน">แม่ฮ่องสอน</option>  
                <option value="นครสวรรค์">นครสวรรค์</option>
                <option value="อุทัยธานี">อุทัยธานี</option>
                <option value="กำแพงเพชร">กำแพงเพชร</option>
                <option value="ตาก">ตาก</option>
                <option value="สุโขทัย">สุโขทัย</option>
                <option value="พิษณุโลก">พิษณุโลก</option>
                <option value="พิจิตร">พิจิตร</option>
                <option value="เพชรบูรณ์">เพชรบูรณ์</option>
                <option value="ราชบุรี">ราชบุรี</option>
                <option value="กาญจนบุรี">กาญจนบุรี</option>
                <option value="สุพรรณบุรี">สุพรรณบุรี</option>
                <option value="นครปฐม">นครปฐม</option>
                <option value="สมุทรสาคร">สมุทรสาคร</option>
                <option value="สมุทรสงคราม">สมุทรสงคราม</option>
                <option value="เพชรบุรี">เพชรบุรี</option>
                <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์</option>
                <option value="นครศรีธรรมราช">นครศรีธรรมราช</option>
                <option value="กระบี่">กระบี่</option>
                <option value="พังงา">พังงา</option>
                <option value="ภูเก็ต">ภูเก็ต</option>
                <option value="สุราษฎร์ธานี">สุราษฎร์ธานี</option>
                <option value="ระนอง">ระนอง</option>
                <option value="ชุมพร">ชุมพร</option>
                <option value="สงขลา">สงขลา</option>
                <option value="สตูล">สตูล</option>
                <option value="ตรัง">ตรัง</option>
                <option value="พัทลุง">พัทลุง</option>
                <option value="ปัตตานี">ปัตตานี</option>
                <option value="ยะลา">ยะลา</option>
                <option value="นราธิวาส">นราธิวาส</option>
            </select>
            <br>

            <label>งานอดิเรก</label>
            <input type="checkbox" name="hobby[]" value="เ***"> เ***
            <input type="checkbox" name="hobby[]" value="เล่นกีฬา"> เล่นกีฬา
            <input type="checkbox" name="hobby[]" value="ดูหนัง"> ดูหนัง
            <input type="checkbox" name="hobby[]" value="ฟังเพลง"> ฟังเพลง
            <input type="checkbox" name="hobby[]" value="ท่องเที่ยว"> ท่องเที่ยว
            <input type="checkbox" name="hobby[]" value="ทำอาหาร"> ทำอาหาร
            <input type="checkbox" name="hobby[]" value="วาดรูป"> วาดรูป
            <input type="checkbox" name="hobby[]" value="เล่นเกม"> เล่นเกม
            <input type="checkbox" name="hobby[]" value="ถ่ายรูป"> ถ่ายรูป
            <input type="checkbox" name="hobby[]" value="ทำสวน"> ทำสวน
            <input type="checkbox" name="hobby[]" value="อ่านหนังสือ"> อ่านหนังสือ
            <input type="checkbox" name="hobby[]" value="เขียนโปรแกรม"> เขียนโปรแกรม
            <input type="checkbox" name="hobby[]" value="อื่นๆ"> อื่นๆ
            <br>

            <label>ความคิดเห็น</label>
            <textarea name="message"></textarea>
            <br>

            <input type="submit" value="ส่งข้อมูล">

        </form>
    </body>
</html>