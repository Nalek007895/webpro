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
    <form method="get" action="process_admin_edit.php">
        <div class="login">
            <table border="0" align="center">
                <tr>
                    <td colspan="" align="center">Flight Update</td>
                </tr>
                <tr>
                    <td>
                        ID:
                        <input type="number" name="ID" id="" value="<?php echo $rs[0] ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        ชื่อสายการบิน:
                        <select name="airName" class="form-control" required>
                            <option value="<?php echo $rs[1] ?>"><?php echo $rs[1] ?></option>
                            <option value="Thai VietJet Air">Thai VietJet Air</option>
                            <option value="Thai Lion Air">Thai Lion Air</option>
                            <option value="Bangkok Airways">Bangkok Airways</option>
                            <option value="Nok Air">Nok Air</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        ต้นทาง :
                        <select name="from">
                            <option value="<?php echo $rs[2] ?>"><?php echo $rs[2] ?></option>
                            <option value="BKK">กรุงเทพ</option>
                            <option value="CNX">เชียงใหม่</option>
                            <option value="CEI">เชียงราย</option>
                            <option value="HDY">หาดใหญ่</option>
                            <option value="HKT">ภูเก็ต</option>
                        </select>
                        ===>
                        ปลายทาง:
                        <select name="dest">
                            <option value="<?php echo $rs[3] ?>"><?php echo $rs[3] ?></option>
                            <option value="BKK">กรุงเทพ</option>
                            <option value="CNX">เชียงใหม่</option>
                            <option value="CEI">เชียงราย</option>
                            <option value="HDY">หาดใหญ่</option>
                            <option value="HKT">ภูเก็ต</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>วันออกเดินทาง : <input type="date" name="date" value="<?php echo $rs[4] ?>"></td>
                </tr>
                <tr>
                    <td>ชั้นโดยสาร :
                        <select name="class">
                            <option value="<?php echo $rs[5] ?>"><?php echo $rs[5] ?></option>
                            <option value="eCls">ชั้นประหยัด</option>
                            <option value="bCls">ชั้นธุรกิจ</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        เวลาออกเดินทาง: <input type="time" name="DTime" value="<?php echo $rs[6] ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        เวลาถึงที่หมาย: <input type="time" name="ATime" value="<?php echo $rs[7] ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        ราคา: <input type="number" name="price" value="<?php echo $rs[8] ?>">
                    </td>
                </tr>
                <tr>
                    <td colspan="" align="center"><input type="submit" class="button" name="Submit" value="Add"> <input type="reset" class="button" name="Reset" value="Clear"></td>
                </tr>
            </table>
        </div>
    </form>
    </center>
</body>

</html>