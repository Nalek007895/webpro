<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การใส่ตัวเลข</title>
</head>

<body>
    <form method="get" action="test20_2.php">
        <table border="1" align="center" width="500">
            <tr>
                <td colspan='2' align='center'><b>Input</b></td>
            </tr>
            <tr>
                <td>Enter Number 1 : </td>
                <td><input type="number" name="num1" max = "9" min = "0" step = "1" value="" /> </td>
            </tr>
                <td>Enter Number 2 : </td>
                <td><input type="number" name="num2" max = "99" min = "10" step = "5" value="" /></td>
            </tr>
            </tr>
                <td>Enter Number 3 : </td>
                <td><input type="number" name="num3" max = "999" min = "100" step = "100" value="" /></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value=" Send " />
                    <input type="reset" value=" Clear " />
                </td>
            </tr>
        </table>
    </form>

</body>

</html>