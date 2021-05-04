<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Array</title>
</head>

<body>

    <?php
    /*
    $score = array();
    $Maxnum = 5;
    $qqq = 0;
    if ($qqq == 0) {
        for ($n = 0; $n < $Maxnum; $n++) {
            for ($m = 0; $m < $Maxnum; $m++) {
                $score[$n][$m] = rand(0, 100);
            }
        };
    }*/
    /*function show_form()
    {*/
    echo '<form method="get" action="test23.php">';

    $Maxnum = 5;
    $score = array();
    for ($n = 0; $n < $Maxnum; $n++) {
        for ($m = 0; $m < $Maxnum; $m++) {
            $score[$n][$m] = rand(0, 100);
        }
    }
    echo '<center><font size="4" color="blue"> lukky number </font></center>';
    echo '<table border="1" align="center">';
    for ($n = 0; $n < $Maxnum; $n++) {
        echo '<tr >';
        for ($m = 0; $m < $Maxnum; $m++) {
            echo '<td >' . $score[$n][$m] . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
    echo '<center><input name = "b1" type="submit" value=" Start Game " /></center>';
    echo '</form>';
    //}
    if (isset($_GET['b1'])) {
        $sum = 7;
        $x = 0;
        $S = array();
        for ($h = 0; $h < $sum; $h++) {
            $S[$h] = rand(0, 100);
        }
        do{
            

            $x += 1;
        }while($x != 7);

    } /*else {
        show_form();
    }*/
    ?>
</body>

</html>