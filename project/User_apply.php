<!DOCTYPE html>
<html lang="en" class="login_pic">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sly.css">
    <title>USER_LOGIN</title>
</head>

<body class="login_pic">
    <center>
        <form action="process_user_apply.php" method="POST">
            <div class="login">
                <table border="0" class="login_tr">
                    <tr>
                        <td colspan="2" align="center">
                            Add User
                        </td>
                    </tr>
                    <tr>
                        <td>
                            IDname
                        </td>
                        <td>
                            <input type="text" name="id" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Name
                        </td>
                        <td>
                            <input type="text" name="name" id="">
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
                <input type="submit" class="button" name="submit" id="" value="Add">
                <input type="reset" class="button" name="reset" id="" value="Clear">
            </div>
        </form>
    </center>

</body>

</html>