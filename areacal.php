<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
</head>

<body>
    <form method="get" action="area.php">
        <?php
        $x = $_GET['num1'];
        $c = $_GET['c'];

        function a1(&$x)
        {
            $x = $x * 2;
        }
        function a2(&$x)
        {
            $x = (2 * pi()) * $x;
        }
        function a3(&$x)
        {
            $x = ($x * $x) * pi();
        }
        function a4(&$x)
        {
            $x = ($x * $x) * (pi() * 4);
        }
        function a5(&$x)
        {
            ($x * $x) * (pi() * (4 / 3));
        }

        ?>
        <table border="0" align="center" width="300">
            <tr>
                <td colspan="2" align="center">
                    <strong> เครื่องคำนวนวงกลมและทรงกลม </strong>
                </td>
            </tr><?php
                    if (!empty($x)) {
                        if (!empty($c)) {
                            if ($c == 1) {
                                a1($x);
                    ?><tr>
                            <td>เส้นผ่าศูนย์กลาง :</td>
                            <td><?php echo number_format($x, 4, '.', ','); ?></td>c<?php
                            }
                            if ($c == 2) {
                            a2($x);?>
                        <tr>
                            <td>เส้นรอบวง :</td>
                            <td><?php echo number_format($x, 4, '.', ','); ?></td>
                        <tr><?php
                            }
                            if ($c == 3) {
                            a3($x);?>
                        <tr>
                            <td>พื้นที่วงกลม :</td>
                            <td><?php echo number_format($x, 4, '.', ','); ?></td>
                        <tr><?php
                            }
                            if ($c == 4) {
                            a4($x);?>
                        <tr>
                            <td>พื้นที่ผิวของทรงกลม :</td>
                            <td><?php echo number_format($x, 4, '.', ','); ?></td>
                        <tr><?php
                            }
                            if ($c == 5) {
                            a5($x);?>
                        <tr>
                            <td>ปริมาตรของทรงกลม :</td>
                            <td><?php echo number_format($x, 4, '.', ','); ?></td>
                        <tr><?php
                            }
                            } else echo "ไม้ได้เลือกการคำนวน</br>";
                            } else echo "ไม่ได้ใส่ข้อมูล </br>";

                            ?>

                        <tr>
                            <td colspan="2" align="center"><input name="btn" type="submit" value="Back" 
                            noClick = "jascript:history.go(-1)"
                            style = "color:black; background-color:slateblue; border:none; 
                            border-radius: 4px; padding:10px 20px;"></td>
                        </tr>
        </table>
        </from>

</body>

</html>