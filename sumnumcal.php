<html>
<head>
    <title> BBBBBBBBBBBBBBB </title>
</head>

<body>
    <center>
        <font size="4">
            <?php
            $number1 = $_GET['number1'];
            $number2 = $_GET['number2'];
            $Result = 0;
            //$operator = $_GET['operator'];
            echo "<table align='center' width='40%' border='1'>";
            echo "<tr><td colspan='2' align='center'><b>Output</b></td></tr>";
            echo "<tr><td>Number 1 :</td><td> <i> $number1 </i> </td></tr>";
            echo "<tr><td>Number 2 :</td><td> <i> $number2 </i> </td></tr>";
            //echo "<tr><td>Operator :</td><td> <i> $operator </i> </td></tr>";
            echo "<tr><td>Result :</td><td> <i> ";
            for($num = $number1 ; $num <= $number2 ; $num++){
                    $Result += $num;
            }
            echo $Result ." </i> </td></tr>";
            echo "</table>"
            ?>
            <a href="sumnum.php"> Back </a>

        </font>
    </center>
</body>

</html>