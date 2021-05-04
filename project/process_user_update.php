<?php
include 'condb.php';
$id = $_POST['id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$date = $_POST['date'];
$quantity = $_POST['quantity'];
$nameair = $_POST['nameair'];
$ori = $_POST['ori'];
$des = $_POST['des'];
$dateout = $_POST['dateout'];
$class = $_POST['class'];
$dtime = $_POST['dtime'];
$atime = $_POST['atime'];
$price = $_POST['price'];

$total = $quantity * $price;
echo $total;

$sql = "INSERT INTO history (ID,FName,LName,Birthday,Quantity,Nameair,Origin,Destination,Date,Class,DTime,ATime,Totalprice) 
    VALUES ('$id','$fname','$lname','$date','$quantity','$nameair','$ori','$des','$dateout','$class','$dtime','$atime','$total')";

if ($conn->multi_query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
header("Location: User_menu.php");




