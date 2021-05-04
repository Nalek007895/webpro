<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>III</title>
</head>

<body>
    <form method="get" action="test27.php">
        <table align="center" width="500">
            <tr>
                <td>ค่าเริ่มตัน : </td>
                <td><input type="number" name="b1" size="15" value="" /> </td>
            </tr>
            <tr>
                <td>ค่าสุดท้าย : </td>
                <td><input type="number" name="b2" size="15" value="" /></td>
            </tr>
            <tr>
                <td>ตัวเลขที่นำไปหาร : </td>
                <td><input type="number" name="b3" size="15" value="" /></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input name = "BBB" type="submit" value=" CheckNum " />
                </td>
            </tr>
        </table>
    </form>
    <?php
        if(isset($_GET['BBB'])){
            $B1 = $_GET['b1'];
            $B2 = $_GET['b2'];
            $B3 = $_GET['b3'];
            echo '<table border="1" align="center" width="500">';
            checkNum($B1,$B2,$B3);
            countNum($B1,$B2,$B3);
            sumNum($B1,$B2,$B3);
            /*echo '<tr><td colspan="2" align="center"> '.checkNum($B1,$B2,$B3).' </td></tr>';
            echo '<tr><td colspan="2" align="center"> '.countNum($B1,$B2,$B3).' </td></tr>';
            echo '<tr><td colspan="2" align="center"> '.sumNum($B1,$B2,$B3).' </td></tr>';*/
            echo '</table>';
            
        }
        function CheckNum($B1,$B2,$B3){
            echo '<tr><td colspan="2" align="center"> ';
            for($i = $B1 ; $i <= $B2 ; $i++){
                if($i % $B3 == 0){
                    echo $i.',';
                }
            }
            echo ' </td></tr>';
        }
        function countNum($B1,$B2,$B3){
            $count = 0;
            echo '<tr><td colspan="2" align="center"> จำนวนที่หารลงตัว = ';
            for($i = $B1 ; $i <= $B2 ; $i++){
                if($i % $B3 == 0){
                    $count += 1;
                }
            }
            echo $count;
            echo ' ตัว </td></tr>';
        }
        function sumNum($B1,$B2,$B3){
            $sum = 0;
            echo '<tr><td colspan="2" align="center"> ผลรวมของตัวเลขที่หารลงตัว = ';
            for($i = $B1 ; $i <= $B2 ; $i++){
                if($i % $B3 == 0){
                    $sum += $i;
                }
            }
            echo $sum;
            echo ' </td></tr>';
        }
    
    ?>
 
</body>

</html>