<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <center>
    <h1>
        เที่ยวบินทั้งหมด
    </h1>
    <table border = "1" >
        <tr align = "center">
            <td id = "SH" >
                IDair
            </td>
            <td id = "id"  >
                Nameair
            </td>
            <td id = "name" >
                Origin
            </td>
            <td id = "pr" >
                Destination
            </td>
            <td id = "gq" >
                Date
            </td>
            <td id = "ed" >
                Class
            </td>
            <td id = "de" >
                DTime
            </td>
            <td id = "ed" >
                ATime
            </td>
            <td id = "de" >
                Price
            </td>
            <td id = "ed" >
                Edit
            </td>
            <td id = "de" >
                Delete
            </td>
        </tr>
        <?php 
            include 'condb.php';
            $sql = "SELECT * FROM `flights` ORDER BY `flights`.`Origin` ASC";
            $result = mysqli_query($conn,$sql);
            $row = 1;
            while ($rs = mysqli_fetch_array($result)){?>
            <tr>
                <td>
                    <?php echo $rs[0];?>
                </td>
                <td>
                    <?php echo $rs[1]; ?>
                </td>
                <td>
                    <?php echo $rs[2]; ?>
                </td>
                <td>
                    <?php echo $rs[3]; ?>
                </td>
                <td>
                    <?php echo $rs[4]; ?>
                </td>
                <td>
                    <?php echo $rs[5]; ?>
                </td>
                <td>
                    <?php echo $rs[6]; ?>
                </td>
                <td>
                    <?php echo $rs[7]; ?>
                </td>
                <td>
                    <?php echo $rs[8]; ?>
                </td>
                <td>
                    <a href="Admin_edit.php?id=<?php echo $rs[0] ?>">[Edit]</a>
                </td>
                <td>
                    <a href="process_admin_delete.php?id=<?php echo $rs[0] ?>">[Delete]</a>
                </td>
            </tr>
            <?php $row++;}
        ?>
    </table>
    </center>
</body>

</html>