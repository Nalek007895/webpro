<?php 
    include 'condb.php';
    $UserName = $_POST['username'];
    $Password = $_POST['password'];
    $sql = "SELECT * FROM user WHERE UserName = '$UserName' AND Password = '$Password'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)){
        $user = mysqli_fetch_array($result);
        session_start();
        $_SESSION['Name'] = $user[3];
        mysqli_close($conn);
        header("location:User_menu.php");
    }
    else{
        header("location:User_login.php");
    }

?>