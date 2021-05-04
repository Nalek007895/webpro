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

        $sql = "UPDATE flights SET IDair='$id',Nameair='$name',Origin='$from',Destination='$dest',Date='$date',Class='$cls',DTime='$dtime',ATime='$atime',Price=' $price' WHERE IDair='$id'";

        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
            header("Location: Admin_menu.php");

        } else {
            echo "Error updating record: " . $conn->error;
        }
        $conn->close();
