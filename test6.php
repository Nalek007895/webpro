<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>III</title>
</head>

<body>
    <?php
    if (isset($_GET['btn1'])) {
        $Ta1 = $_GET['T1'];
        $Ta2 = $_GET['T2'];
        echo "<b> Resole </b><br />";
        echo "First name : <i> $Ta1 </i> <br/>";
        echo "Last name : <i> $Ta2</i> <br/>";
    } else {
    ?>

        <form method="get" action="test6.php">
            <b>Input</b><br>
            <b>First name</b>
            <input type="text" name="T1" size="15" value="" /><br>
            <b>Last name</b>
            <input type="text" name="T2" size="15" value="" /><br>
            <input name="btn1" type="submit" value=" Ok " />
            <input name="btn2" type="reset" value=" Clear " />
        </form>
    <?php
    }
    ?>
</body>

</html>