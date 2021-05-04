<?php
session_start();
$User_name = $_SESSION['Name'];
?>
<!DOCTYPE html>
<html lang="en" class="user_pic)">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sly.css">
    <title>Menu</title>
</head>

<body class="user_pic">
    <center>
        <div class="user_menu_topheader">
            <h1>User</h1>
            <?php
            //echo '<h1> สวัสดีคุณ ' . $User_name . ' เชิญเลือกรายการที่ท่านต้องการ </h1>';
            //echo $User_password;
            //echo $User_username;  
            ?>
        </div>
        <?php
        include 'condb.php';
        ?>
        <form method="post" action="User_menu.php">
            <div class="user_menu_table">
                <table border="0" align="center">
                    <tr>
                        <td colspan="2" align="center">โปรดเลือก </td>
                    </tr>
                    <tr>
                        <td>
                            <center>
                                ต้นทาง:
                                <select name="from">
                                    <option value="BKK">กรุงเทพ</option>
                                    <option value="CNX">เชียงใหม่</option>
                                    <option value="CEI">เชียงราย</option>
                                    <option value="HDY">หาดใหญ่</option>
                                    <option value="HKT">ภูเก็ต</option>
                                </select>
                            </center>
                        </td>
                        <td>
                            <center>
                                ปลายทาง:
                                <select name="dest">
                                    <option value="BKK">กรุงเทพ</option>
                                    <option value="CNX">เชียงใหม่</option>
                                    <option value="CEI">เชียงราย</option>
                                    <option value="HDY">หาดใหญ่</option>
                                    <option value="HKT">ภูเก็ต</option>
                                </select>
                            </center>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <center>
                                วันออกเดินทาง:<input type="date" name="date">
                            </center>
                        </td>
                        <td>
                            <center>
                                ชั้นโดยสาร:
                                <select name="class">
                                    <option value="eCls">ชั้นประหยัด</option>
                                    <option value="bCls">ชั้นธุรกิจ</option>
                                </select>
                            </center>
                        </td>
                    </tr>
                </table><br>
                <input type="submit" class="user_menu_but" name='submit' value="Find" />
                <input type="reset" class="user_menu_but" value="Reset" />
            </div>
        </form>
        <br><br>
        <?php
        if (isset($_POST['submit'])) {
            $Form = $_POST['from'];
            $Dest = $_POST['dest'];
            $Class = $_POST['class'];
            $Date = $_POST['date'];


            $sql = "SELECT * FROM flights WHERE Origin='$Form'AND Destination='$Dest'AND Date='$Date'AND Class = '$Class' ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo '<div class = "user_menu_table2">';
                echo '<table border="0" align="center">';
                echo '<tr align="center">';
                echo '<td align="center"> ID </td>';
                echo '<td align="center"> Nameair </td>';
                echo '<td align="center"> Origin </td>';
                echo '<td align="center"> Destination	 </td>';
                echo '<td align="center"> Date </td>';
                echo '<td align="center"> Class </td>';
                echo '<td align="center"> DTime </td>';
                echo '<td align="center"> ATime </td>';
                echo '<td align="center"> Price </td>';
                echo '<td align="center"> Select </td>';
                echo '</tr>';

                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td align="center">' . $row["IDair"] . '</td>';
                    echo '<td align="center">' . $row["Nameair"] . '</td>';
                    echo '<td align="center">' . $row["Origin"] . '</td>';
                    echo '<td align="center">' . $row["Destination"] . '</td>';
                    echo '<td align="center">' . $row["Date"] . '</td>';
                    echo '<td align="center">' . $row["Class"] . '</td>';
                    echo '<td align="center">' . $row["DTime"] . '</td>';
                    echo '<td align="center">' . $row["ATime"] . '</td>';
                    echo '<td align="center">' . $row["Price"] . '</td>';
                    echo '<td align="center">'; ?>
                    <a href="process_user_make.php?id=<?php echo $row["IDair"] ?>">[Selet]</a>
        <?php echo '</td>';
                    echo '<tr>';
                    //echo '</table>';
                    //echo '</div>';
                }
            } else {
                echo '<div class = "user_menu_table22">';
                echo "<center><h1>ไมมีโว้ยยยยย...!!!</h1></center>";
            }
        }

        $conn->close();

        ?>
        </table>
        </div>
        <div class="user_menu_last">
            <h1><a href="User_logout.php">LOGOUT</a></h1>
        </div>
    </center>
</body>

</html>