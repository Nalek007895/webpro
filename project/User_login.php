<!DOCTYPE html>
<html lang="en" class="login_pic">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sly.css">
    <title>User Login</title>
</head>

<body class="login_pic">
    <center>
        <form action="process_user_login.php" method="POST">
            <div class="login">
                <table border="0" class="login_tr">
                    <tr>
                        <td colspan="2" align="center">
                            <p>User Login</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Username
                        </td>
                        <td>
                            <input type="text" name="username" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Password
                        </td>
                        <td>
                            <input type="password" name="password" id="">
                        </td>
                    </tr>
                </table><br>
                <input type="submit" class="button" value="Login">
                <input type="reset" class="button" value="cancel"><br>
                <div class="login_h">
                    <h3 ><a href="User_apply.php">Apply for user</a></h3>
                    <h3 ><a href="menu.php">go to menu</a></h3>
                </div>
            </div>
        </form>
    </center>
</body>

</html>