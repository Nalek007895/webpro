<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
</head>
<body>
    <?php 
        $x1 =$_GET['num1'];
        $x2 =$_GET['num2'];
        $ran=0;
        $n1=0;
        $n2=0;
        function ran(&$ran,&$n1,&$n2){
            $ran= rand(0, 99);
            if(($ran%2)==0){
                echo "<font color='blue'>$ran</font>";
                $n1++;
            }else{echo "<font color='red'>$ran</font>";
                $n2++;
            }

        }
        function show_checker( $maxRow, $maxCol,&$n1,&$n2) {
            
            echo '<table align="center" border="1">' ;
            for($r = 1; $r <= $maxRow; $r++) {
                echo '<tr >';
                for($c = 1; $c <= $maxCol; $c++) {
                    echo "<td>";
                    ran($ran,$n1,$n2);
                    echo "</td>";
                    }
                echo '</tr>';
            }
            echo '</table>';
        }
?>
        <table border="0"align="center"width="300">
            <?php
            if(!empty($x1)){
                if(!empty($x2)){
                    show_checker($x1,$x2,$n1,$n2);?>
                     <table border="0"align="center"width="300">
                    <tr><td align="center"><?php
                    echo "เลขคู่มีจำนวน : $n1 ตัว</br>";
                    echo "เลขคี่มีจำนวน : $n2 ตัว</br>";?></td></tr><?php
                }else echo "ไม้ได้ใส่ colunn</br>";  
            } else echo "ไม่ได้ใส่ row </br>";?>

            <table border="0"align="center"width="300">
            <tr>
                <td colspan="2" align="center">
                <input type="button" onClick="javascript:history.back()" value="back" 
                style="color: white;background-color:cornflowerblue;border-radius: 2px;padding: 0;">                </td>
            </tr>
</table>
</body>
</html>