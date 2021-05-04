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
    $s1 = $_GET['s1'];
    echo "<b> III </b><br />";
    echo "รหัสนักศึกษา : <i>$T1</i> <br/>";
    echo "ชื่อ-นามสกุล : <i>$T2</i> <br/>";
    echo "เพศ        : <i>$s1</i> <br/>";
    //echo "คณะ       : <i>$s2</i> <br/>";
    if(isset($_GET['btnSubmit'])){
        if($_GET['gender'] == ""){
            $error = "<li>ไม่มีไอ้สัส</li>";
            echo $error;
        }else{
            $varGender = $_GET['gender'];
            echo "หลักสูตร : $varGender <br/>";
        }
    }
    echo "เกรด       : <i>$T3</i> <br/>";
    //$operator = $_GET['operator'];
    ?>
    <a href="test21_1.php"> Back </a>
</body>

</html>