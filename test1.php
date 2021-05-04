<html> 
<body>
<center>    
<font size="4">
<?php
/*$name = "นายนลิน  แก้วพันตา";
$age = 20;
$id = 6206021622020;
$country = "ปราจีนบุรี";
$tal = "0631638720";
echo "My name is $name,<br /> $age years old <br />";
echo "ID $id <br />";
echo "tel $tal <br />";
echo "from $country <br />";*/

/*$floor = 5;
echo "Building is being constructed.\n";
$floor += 3;
echo "First day finished $floor floors.\n";
$floor += 5;
echo "Second day finished $floor floors.\n";
$floor += 4;
echo "Third day finished $floor floors.\n";
$floor += 2;
echo "Forth day finished $floor floors .\n";*/

/*$a = 8;
$b = 3;
echo "a & b = ", $a & $b, "\n";
echo "a | b = ", $a | $b, "\n";
echo "a ^ b = ", $a ^ $b, "\n";
echo "~a = ", ~$a, "\n";
echo "a << 1 = ", $a << 1, "\n";
echo "a >> 1 = ", $a >> 1, "\n";*/

$number1 = $_GET['number1'];
$number2 = $_GET['number2'];
$operator = $_GET['operator'];
echo "<table align='center' width='40%' border='1'>";
echo "<tr><td colspan='2' align='center'><b>Data for Input</b></td></tr>";
echo "<tr><td>Number 1 :</td><td> <i> $number1 </i> </td></tr>";
echo "<tr><td>Number 2 :</td><td> <i> $number2 </i> </td></tr>";
echo "<tr><td>Operator :</td><td> <i> $operator </i> </td></tr>";
echo "<tr><td>Result :</td><td> <i> ";
if ($operator == "+")
echo ($number1 + $number2) ." </i> </td></tr>";
if ($operator == "-")
echo ($number1 - $number2) ." </i> </td></tr>";
if ($operator == "*")
echo ($number1 * $number2) ." </i> </td></tr>";
if ($operator == "/")
echo ($number1 / $number2) ." </i> </td></tr>";
if ($operator == "%")
echo ($number1 % $number2) ." </i> </td></tr>";
echo "</table>"
?>
<a href="TS.php"> Back </a>

</font>
</center>
</body>
</html>