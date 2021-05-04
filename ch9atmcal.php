<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
</head>
<body>
    <?php 
        $money =$_GET['num1'];

        $x=$money;
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
        if($b1 >0)echo "1 baht    : $b1</br>";
    ?>

<a href="ch9atm.php"> Back </a>
</body>
</html>