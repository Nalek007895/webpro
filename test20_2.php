<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESAS</title>
</head>
<body>
    <?php
    $N1 = $_GET['num1'];
    $N2 = $_GET['num2'];
    $N3 = $_GET['num3'];

    echo "<b> III </b><br />"; 
    echo "Enter Number 1 : <i>$N1</i> <br/>";
    echo "Enter Number 2 : <i>$N2</i> <br/>";
    echo "Enter Number 3 : <i>$N3</i> <br/>";
    echo "<br/><br/>";

    if(!empty($N1)){
        echo "Enter Number 1 : <i>$N1</i> <br/>";
    }
    if(!empty($N2)){
        echo "Enter Number 2 : <i>$N2</i> <br/>";
    }
    if(!empty($N3)){
        echo "Enter Number 3 : <i>$N3</i> <br/>";
    }
    echo "<br/><br/>";
    ?>
    <a href="test20_1.php"> Back </a>
</body>
</html>