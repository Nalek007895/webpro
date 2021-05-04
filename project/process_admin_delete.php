<?php
    include 'condb.php';
    $id = $_REQUEST['id'];
    $sql = "DELETE FROM flights WHERE IDair = '$id'";
    $result = mysqli_query($conn,$sql);
    $conn->close();
    header("Location: Admid_menu.php");
?>