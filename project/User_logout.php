<?php 
    session_start();
    session_destroy();
    echo "You have successfully logged out";
    header("location:User_login.php");
?>