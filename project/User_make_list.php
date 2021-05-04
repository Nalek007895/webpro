<?php
session_start();
@$User_name = $_SESSION['User_name'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include 'condb.php';
    ?>
    <form method="post" action="User_make_list.php">
        <table border="1" align="center">
            <tr>
                <td colspan="2" align="center">โปรดเลือก </td>
            </tr>
            <tr>
                <td>ต้นทาง:
                    <select name="from">
                        <option value="BKK">กรุงเทพ</option>
                        <option value="CNX">เชียงใหม่</option>
                        <option value="CEI">เชียงราย</option>
                        <option value="HDY">หาดใหญ่</option>
                        <option value="HKT">ภูเก็ต</option>
                    </select>
                    ===>
                    ปลายทาง:
                    <select name="dest">
                        <option value="BKK">กรุงเทพ</option>
                        <option value="CNX">เชียงใหม่</option>
                        <option value="CEI">เชียงราย</option>
                        <option value="HDY">หาดใหญ่</option>
                        <option value="HKT">ภูเก็ต</option>
                    </select>
                    จำนวนผู้โดยสาร:<input type="number" name="quantity" min="1">
                </td>
            </tr>
            <tr>
                <td>
                    วันออกเดินทาง:<input type="date" name="date">
                    ชั้นโดยสาร:
                    <select name="class">
                        <option value="eCls">ชั้นประหยัด</option>
                        <option value="bCls">ชั้นธุรกิจ</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name='submit' value="Find" />
                    <input type="reset" value="Reset" />
                </td>
            </tr>
        </table>
    </form>
    <br><br>
    <?php
    if (isset($_POST['submit'])) {
        $Form = $_POST['from'];
        $Dest = $_POST['dest'];
        $Class = $_POST['class'];
        $Quantity = $_POST['quantity'];
        $Date = $_POST['date'];


        $sql = "SELECT * FROM flights WHERE Origin='$Form'AND Destination='$Dest'AND Date='$Date'AND Class = '$Class' ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo '<table border="1" align="center">';
            echo '<tr align="center">';
            echo '<td> ID </td>';
            echo '<td> Nameair </td>';
            echo '<td> Origin </td>';
            echo '<td> Destination	 </td>';
            echo '<td> Date </td>';
            echo '<td> Class </td>';
            echo '<td> DTime </td>';
            echo '<td> ATime </td>';
            echo '<td> Price </td>';
            echo '<td> Select </td>';
            echo '</tr>';

            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row["IDair"] . '</td>';
                echo '<td>' . $row["Nameair"] . '</td>';
                echo '<td>' . $row["Origin"] . '</td>';
                echo '<td>' . $row["Destination"] . '</td>';
                echo '<td>' . $row["Date"] . '</td>';
                echo '<td>' . $row["Class"] . '</td>';
                echo '<td>' . $row["DTime"] . '</td>';
                echo '<td>' . $row["ATime"] . '</td>';
                echo '<td>' . $row["Price"] . '</td>';
                echo '<td>'; ?>
                <a href="process_user_make.php?id=<?php echo $row["IDair"] ?>">[Selet]</a>
    <?php echo '</td>';
                echo '<tr>';
            }
        } else {
            echo "<center><h1>ไมมีโว้ยยยยย...!!!</h1></center>";
        }
    }

    $conn->close();

    ?>

    </table>
</body>

</html>