<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // declare function page_header with argument and defualt value
    function page_header($title, $bgcolor = "ffffff")
    {
        echo '<html lang="en"><head><meta charset="UTF-8">';
        echo '<title>' . $title . '</title></head>';
        echo '<body bgcolor="#' . $bgcolor . '">';
    }
    // declare function page_footer
    function page_footer($message)
    {
        echo '<hr />' . $message;
        echo '</body></html>';
    }
    // declare function summation
    /*function summation($start, $stop)
    {
        $total = 0;
        for ($n = $start; $n <= $stop; $n++) {
            $total += $n;
        }
        return ($total);
    }*/

    function show_form()
    {
        echo '<form method="get" action="test16.php">';
        echo '<table border="1" align="center" width="400">';
        echo '<tr><td colspan="2" align="center"><strong> INPUT </strong></td></tr>';
        echo '<tr><td> รหัสนักศึกษา :  </td><td>';
        echo '<input type="text" name="T1" size="10" value="" /></td></tr>';
        echo '<tr><td> ชื่อ-นามสกุล : </td><td>';
        echo '<input type="text" name="T2" size="10" value="" /></td></tr>';
        echo '<tr><td> เพศ : </td><td>';
        echo '<input type="radio" name="s1" size="1" value="ชาย">ชาย
        <input type="radio" name="s1" size="1" value="หญิง">หญิง</td></tr>';
        echo '<tr><td> สาขา : </td><td>';
        echo '<input type="radio" name="s2" size="1" value="IT">IT
        <input type="radio" name="s2" size="1" value="ITI">ITI</td></tr>';
        echo '<tr><td> เกรด :  </td><td>';
        echo '<input type="text" name="T3" size="10" value="" /><br></td></tr>';

        echo ' <tr><td colspan="2" align="center"><input type="submit" value=" OK " />';
        echo '<input type="reset" value=" Clear " /></td></tr></table></form> ';
    }

    // main program
    page_header("My Web Page", "EEDDFF");
    if (isset($_GET['T1']) && isset($_GET['T2'])) {
        $T1 = $_GET['T1'];
        $T2 = $_GET['T2'];
        $T3 = $_GET['T3'];
        $s2 = $_GET['s2'];
        $s1 = $_GET['s1'];
        echo "<b> Resole </b><br />";
        echo "รหัสนักศึกษา : <i> $T1 </i> <br/>";
        echo "ชื่อ-นามสกุล : <i> $T2</i> <br/>";
        echo "เพศ        : <i> $s1 </i> <br/>";
        echo "คณะ       : <i> $s2</i> <br/>";
        echo "เกรด       : <i> $T3 </i> <br/>";
    } else {
        show_form();
    }
    ?>
</body>

</html>