<?php 
    session_start();
    session_destroy();
    echo "You have successfully logged out";
    header("location:Admin_login.php");
?>