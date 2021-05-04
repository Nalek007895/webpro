<?php
include 'condb.php';
$sql = "SELECT * FROM `flights` ";
$result = mysqli_query($conn, $sql);
for ($i = 0; $i < mysqli_num_rows($result); $i++) {
    $goods[] = mysqli_fetch_array($result);
}



?>
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
        <table border="1">
            <tr>
                <td colspan="10" align="center">
                    Calculate Goods
                </td>
            </tr>
            <tr>
                <th>
                    #
                </th>
                <th>
                    IDair
                </th>
                <th>
                    Nameair
                </th>
                <th>
                    Origin
                </th>
                <th>
                    Destination
                </th>
                <th>
                    Date
                </th>
                <th>
                    Class
                </th>
                <th>
                    DTime
                </th>
                <th>
                    ATime
                </th>
                <th>
                    Price
                </th>
            </tr>
            <?php $x = 0;
            $cumulativeTotal = 0;
            while ($x < count($goods)) {
            ?>
                <tr>
                    <td align="center">
                        <?php echo $x + 1; ?>
                    </td>
                    <td align="center">
                        <?php echo $goods[$x][0]; ?>
                    </td>
                    <td align="center">
                        <?php echo $goods[$x][1]; ?>
                    </td>
                    <td align="center">
                        <?php echo $goods[$x][2]; ?>
                    </td>
                    <td align="center">
                        <?php echo $goods[$x][3]; ?>
                    </td>
                    <td align="center">
                        <?php echo $goods[$x][4]; ?>
                    </td>
                    <td align="center">
                        <?php echo $goods[$x][5]; ?>
                    </td>
                    <td align="center">
                        <?php echo $goods[$x][6]; ?>
                    </td>
                    <td align="center">
                        <?php echo $goods[$x][7]; ?>
                    </td>
                    <td align="center">
                        <?php echo number_format($goods[$x][8], 2); ?>
                    </td>

                    <?php $x++; ?>
                </tr>
            <?php } ?>




        </table>
    </center>
</body>

</html>