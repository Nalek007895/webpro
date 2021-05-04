<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RRR</title>
</head>

<body>
    <?php
    $T1 = $_GET['b1'];
    $T2 = $_GET['b2'];

    echo '<form method="get" action="test26_1.php">';
    echo '<table border="1" align="center" width="500">';
    echo '<tr><td>ชื่อลูกค้า : </td><td>'.$T1.'</td></tr>';
    echo '<tr><td>ผ่อนงวดละ : </td><td>'.$T2.'</td></tr>';
    echo '<tr><td>จำนวนงวด : </td>';
    if(isset($_GET['BBB'])){
        if($_GET['gender'] == ""){
            $error = "<li>ไม่มีไอ้สัส</li>";
            echo $error;
        }else{
            $varGender = $_GET['gender'];
            $sum = $varGender * $T2;
            echo '<td>'.$varGender.'</td></tr>';
        }
    }
    echo '<tr><td>ยอดเงินรวม : </td><td>'.$sum.'</td></tr>';
    if($sum <= 749000){
        echo '<tr><td colspan="2" align="center"> ไอ้หน้าโง่ไม่มีตังซื้อรถ </td></tr>';
    }else{
        echo '<tr><td colspan="2" align="center"> สวัสดีครับพี่เชิญเลือกรถได้เลยงับบบ </td></tr>';
    }

    if($sum > 749000){
        echo '<tr><td> <img src="City.png"><img src="logo-city.png">: </td><td> ราคา 749,000 บาท </td></tr>';
    }if($sum > 849000){
        echo '<tr><td> <img src="Jazz.png"><img src="logo-jazz.png"> : </td><td> ราคา 849,000 บาท </td></tr>';
    }if($sum > 1149000){
        echo '<tr><td> <img src="Civic.png"><img src="logo-civic.png"> : </td><td> ราคา 1,149,000 บาท </td></tr>';
    }if($sum > 1799000){
        echo '<tr><td><img src="Accord.png"><img src="logo-accord.png"> : </td><td> ราคา 1,799,000 บาท </td></tr>';
    }
    echo '<tr><td colspan="2" align="center"><input name = "BBB" type="submit" value=" Back to Home " /></td></tr>';
    //$operator = $_GET['operator'];
    ?>
</body>

</html>