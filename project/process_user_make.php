<?php
include 'condb.php';
$id = $_REQUEST['id'];
$sql = "SELECT * FROM flights WHERE IDair = '$id' ";
$result = mysqli_query($conn, $sql);
$rs = mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en" class="login_pic">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sly.css">
    <title>Document</title>
</head>

<body class="login_pic">
    <br>
    <center>
        <form action="process_user_update.php" method="post">
            <div class="login_make">
                <table border="0" width="30%">
                    <tr>
                        <td colspan="2" align="center">
                            <b>โปรดกรอกข้อมูล</b>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            เลขบัตรประชาชน
                        </td>
                        <td>
                            <input type="number" name="id" min="1000000000000" mxa="9999999999999">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            ชื่อจริง
                        </td>
                        <td>
                            <input type="text" name="fname" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            นามสกุล
                        </td>
                        <td>
                            <input type="text" name="lname" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            วันเกิด
                        </td>
                        <td>
                            <input type="date" name="date" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            จำนวนผู้โดยสาร
                        </td>
                        <td>
                            <input type="number" name="quantity" min="1">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            ชื่อสายการบิน
                        </td>
                        <td>
                            <input type="text" name="nameair" id="" value="<?php echo $rs[1] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            ต้นทาง
                        </td>
                        <td>
                            <input type="text" name="ori" id="" value="<?php echo $rs[2] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            ปลายทาง
                        </td>
                        <td>
                            <input type="text" name="des" id="" value="<?php echo $rs[3] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            วันออกเดินทาง
                        </td>
                        <td>
                            <input type="text" name="dateout" id="" value="<?php echo $rs[4] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            ชั้นโดยสาร
                        </td>
                        <td>
                            <input type="text" name="class" id="" value="<?php echo $rs[5] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            เวลาออก
                        </td>
                        <td>
                            <input type="text" name="dtime" id="" value="<?php echo $rs[6] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            เวลาถึง
                        </td>
                        <td>
                            <input type="text" name="atime" id="" value="<?php echo $rs[7] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            ราคาต่อคน
                        </td>
                        <td>
                            <input type="number" name="price" id="" value="<?php echo $rs[8] ?>">
                        </td>
                    </tr>
                </table>
                <br>
                <input type="submit" class="button" value="Ok">
                <input type="reset" class="button" value="Clear">
            </div>
        </form>
    </center>
</body>

</html>