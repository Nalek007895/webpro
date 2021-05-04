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
        if(!empty($money)){
        $x=0;
        $p;
        $ans=0;
        $ans2=$money*12;
        $ans3;
        if($ans2>=2000000){
            $x=($money*30)/100;
            $p="30%";
            $ans =$x*12;
            $ans3=$ans2-$ans;
        }
        else if($ans2>=1000000){
            $x=($money*20)/100;
            $p="20%";
            $ans =$x*12;
            $ans3=$ans2-$ans;
        }
        else if($ans2>=500000){
            $x=($money*10)/100;
            $p="10%";
            $ans =$x*12;
            $ans3=$ans2-$ans;
        }
        else if($ans2>=100000){
            $x=($money*5)/100;
            $p="5%";
            $ans =$x*12;
            $ans3=$ans2-$ans;
        }
        else if($ans2<100000) {
            $p="ไม่เสีย";
            $ans =$x*12;
            $ans3=$ans2-$ans;
        }
        echo "เงินเดือน : ";
        echo number_format($money);
        echo" บาท</br>";

        echo "เงินเดือนต่อปี : ";
        echo number_format($ans2);
        echo" บาท</br>";

        echo "ภาษี : ";
        echo $p;
        echo" </br>";

        echo "ภาษีต่อปี : ";
        echo number_format($ans);
        echo" บาท</br>";

        echo "เงินเดือนที่เสียภาษีทั้งปี : ";
        echo number_format($ans3);
        echo" บาท</br>";
    
    }
        else echo "ไม่ได้ใส่ข้อมูล </br>";

    ?>

<a href="ch9_1.php"> Back </a>
</body>
</html>