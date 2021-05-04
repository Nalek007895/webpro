<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SSS</title>
</head>
<body>
    <?php
        $money =$_GET['num'];
        $Mmoney = $money * 12;
        $ss;
        echo "เงินเดือน  : ".number_format($money, 2)."บาท</br>";
        echo "เงินเดือนต่อปี  : ".number_format($Mmoney, 2)." บาท</br>";
        if($Mmoney > 1999999){
            $ss = 30/100;
            echo "ภาษี : 30%</br>";
        }else if($Mmoney > 999999){
            $ss = 20/100;
            echo "ภาษี : 20%</br>";
        }else if($Mmoney > 499999){
            $ss = 10/100;
            echo "ภาษี : 10%</br>";
        }else{
            $ss = 5/100;
            echo "ภาษี : 5%</br>";
        }
        $sumsalary = $Mmoney * $ss;
        $sum = $Mmoney - $sumsalary;
        echo "เงินภาษี : ".number_format($sumsalary, 2)." บาท</br>";
        echo "เงินหลังหักภาษี  : ".number_format($sum, 2)." บาท</br>";

        /*$x=$money;
        $b1000 =  floor(($money / 1000));
        $money = $money - $b1000 * 1000;
        $b500  = floor($money / 500);
        $money = $money - $b500 * 500;
        $b100  = floor($money / 100);
        $money = $money - $b100 * 100;
        $b10  = floor($money / 10);
        $money = $money - $b10 * 10;
        $b5  = floor($money / 5);
        $money = $money - $b5 * 5;
        $b1  = floor($money / 1);
        $money = $money - $b1 * 1;

        echo "Money : $x</br>";
        if($b1000 >0)echo "1000 baht : $b1000</br>";
        if($b500 >0)echo "500 baht  : $b500</br>";
        if($b100 >0)echo "100 baht  : $b100</br>";
        if($b10 >0)echo "10 baht   : $b10</br>";
        if($b5 >0)echo "5 baht     : $b5</br>";
        if($b1 >0)echo "1 baht    : $b1</br>";*/
    ?>
</body>
</html>