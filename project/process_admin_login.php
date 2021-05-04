<?php 
    include 'condb.php';
    $AdminName = $_POST['adminname'];
    $Password = $_POST['password'];
    $sql = "SELECT * FROM admin WHERE Adminname = '$AdminName' AND Password = '$Password'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)){
        $admin = mysqli_fetch_array($result);
        session_start();
        $_SESSION['Name'] = $admin[1];
        mysqli_close($conn);
        header("location:Admin_menu.php");
    }
    else{
        header("location:Admid_login.php");
    }

?>