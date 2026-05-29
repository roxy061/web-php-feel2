<?php
// ข้อมูลส่วนตัว
$profile = [
    'fullname' => 'นาย ภคพล สมัยแก้ว',
    'nickname' => 'ฟีล',
    'studentId' => '69319010015',
    'department' => 'เทคโนโลยีสารสนเทศ',
    'age' => 18,
    'avatarInitial' => 'ฟ'
];

// ข้อมูลรายการ
$infoItems = [
    [
        'icon' => '📝',
        'label' => 'รหัสประจำตัวนักเรียน',
        'value' => $profile['studentId']
    ],
    [
        'icon' => '🎓',
        'label' => 'แผนกวิชา',
        'value' => $profile['department']
    ],
    [
        'icon' => '🎂',
        'label' => 'อายุ',
        'value' => $profile['age'] . ' ปี'
    ]
];

// ฟังก์ชันสำหรับสร้าง HTML
function generateInfoCard($item) {
    $html = '<div class="info-card">' . "\n";
    $html .= '    <div class="info-label">' . $item['icon'] . ' ' . $item['label'] . '</div>' . "\n";
    $html .= '    <div class="info-value">' . $item['value'] . '</div>' . "\n";
    $html .= '</div>' . "\n";
    return $html;
}

$currentDate = date('d/m/Y');
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แนะนำตัวเอง - <?php echo $profile['nickname']; ?></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #0f0c29, #302b63, #24243e);
            color: #e0e0e0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            font-size: 16px;
        }

        .container {
            background: linear-gradient(135deg, rgba(15, 12, 41, 0.9), rgba(48, 43, 99, 0.9));
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 50px 40px;
            max-width: 600px;
            width: 100%;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(10px);
            animation: slideIn 0.6s ease-out;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .header {
            text-align: center;
            margin-bottom: 40px;
            padding-bottom: 30px;
            border-bottom: 2px solid rgba(255, 255, 255, 0.1);
        }

        .profile-avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea, #764ba2);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 48px;
            font-weight: bold;
            color: #ffffff;
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.4);
        }

        .nickname {
            font-size: 32px;
            font-weight: 700;
            background: linear-gradient(135deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin: 15px 0;
        }

        .fullname {
            font-size: 18px;
            color: #b0b0b0;
            margin-bottom: 5px;
        }

        .info-section {
            margin-bottom: 30px;
        }

        .info-card {
            background: rgba(255, 255, 255, 0.05);
            border-left: 4px solid #667eea;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 15px;
            transition: all 0.3s ease;
        }

        .info-card:hover {
            background: rgba(255, 255, 255, 0.08);
            border-left-color: #764ba2;
            transform: translateX(5px);
        }

        .info-label {
            font-size: 13px;
            color: #9090b0;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 8px;
            font-weight: 600;
        }

        .info-value {
            font-size: 20px;
            font-weight: 600;
            color: #ffffff;
        }

        .footer {
            text-align: center;
            margin-top: 40px;
            padding-top: 30px;
            border-top: 2px solid rgba(255, 255, 255, 0.1);
            font-size: 12px;
            color: #7070a0;
        }

        @media (max-width: 600px) {
            .container {
                padding: 35px 25px;
                border-radius: 15px;
            }

            .nickname {
                font-size: 26px;
            }

            .info-value {
                font-size: 18px;
            }

            .profile-avatar {
                width: 100px;
                height: 100px;
                font-size: 40px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="profile-avatar"><?php echo $profile['avatarInitial']; ?></div>
            <div class="nickname"><?php echo $profile['nickname']; ?></div>
            <div class="fullname"><?php echo $profile['fullname']; ?></div>
        </div>

        <div class="info-section">
            <?php
            foreach ($infoItems as $item) {
                echo generateInfoCard($item);
            }
            ?>
        </div>

        <div class="footer">
            <p>✨ แนะนำตัวเอง | Updated: <?php echo $currentDate; ?></p>
        </div>
    </div>
</body>
</html>
