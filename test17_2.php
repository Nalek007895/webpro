<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IIII</title>
</head>
<body>
    <?php
    $T1 = $_GET['T1'];
    $T2 = $_GET['T2'];
    $T3 = $_GET['T3'];
    $s2 = $_GET['s2'];
    $s1 = $_GET['s1'];

    $sum = array($T1,$T2,$s1,$s2,$T3);
    Print_F($sum);

    function Print_F($sum){
        echo "<b> III </b><br />";
        echo "รหัสนักศึกษา : <i>". $sum[0] ."</i> <br/>";
        echo "ชื่อ-นามสกุล : <i>". $sum[1] ."</i> <br/>";
        echo "เพศ        : <i>". $sum[2] ."</i> <br/>";
        echo "คณะ       : <i>". $sum[3] ."</i> <br/>";
        echo "เกรด       : <i>". $sum[4]  ."</i> <br/>";
    };
    //$operator = $_GET['operator'];
    ?>
    <a href="test17_1.php"> Back </a>
</body>
</html>