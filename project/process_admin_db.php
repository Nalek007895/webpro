<?php
        include 'condb.php';
        $id = $_GET['ID'];
        $name = $_GET['airName'];
        $from = $_GET['from'];
        $dest = $_GET['dest'];
        $date = $_GET['date'];
        $cls = $_GET['class'];
        $dtime = $_GET['DTime'];
        $atime = $_GET['ATime'];
        $price = $_GET['price'];

        $sql = "INSERT INTO flights (IDair,Nameair,Origin,Destination,Date,Class,DTime,ATime,Price)
        VALUES ('$id', '$name', '$from','$dest','$date','$cls','$$dtime','$atime','$price')";
        mysqli_query($conn, $sql);
        if ($conn->multi_query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();

        header("Location: Admin_menu.php");
?>