<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> ตัวอย่าง วัน </title>
</head>
</head>

<body>
    <?php
    $today = '5';
    $day = '';
    switch ($today) {

        case '1':
            $day = 'วันอาทิตย์ สีแดง';
            break;
        case '2':
            $day = 'วันจันทร์ สีเหลือง';
            break;
        case '3':
            $day = 'วันอังคาร สีชมพู';
            break;
        case '4':
            $day = 'วันพุธ สีเขียว';
            break;
        case '5':
            $day = 'วันพฤหัสบดี สีส้ม';
            break;
        case '6':
            $day = 'วันศุกร์ สีฟ้า';
            break;
        case '7':
            $day = 'วันเสาร์ สีม่วง';
    }
    //echo "Subject 060213206 Web Programming<br/>";
    echo "วันที่ $today คือ $day ...!<br/>";

    ?>
</body>

</html>