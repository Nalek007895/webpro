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
    function checkNum($arrNum)
    {

        $count = 0;
        for ($i = 0; $i < 5;) {
            $x = rand(0, 99);
            if (in_array($x, $arrNum)) {
                echo "<h6>ครั้งที่" . ++$count . " => " . $x . "ยินดีด้วย คุณมีเลขนี้</h6>";
                $i++;
            } else {
                echo "<h6>ครั้งที่" . ++$count . " => " . $x . "เสียใจด้วย คุณไม่มีเลขนี้<h6>";
            }
        } ?>
        <h3 style="color:crimson;" align="center">คุณ จบ BINGO เกมนี้ ใน ครั้งที่ <?php echo $count; ?></h3>

    <?php  }
    ?>

    <?php
    if (isset($_POST['btn'])) {
        $str = $_POST['numbers'];
        $numbers = unserialize($str);

    ?>

        <table border="1" align="center">
            <tr>
                <td colspan="5" align="center" width="60">Bingo Game</td>
            </tr>
            <?php
            $nLine = 1;
            foreach ($numbers as $ele) {
                echo " <td align='center' width='60'>" . $ele . "</td>";
                if ($nLine % 5 == 0) echo "</tr>";
                $nLine++;
            }
            ?>
        </table>

        <?php
        checkNum($numbers);
        ?>

    <?php
    } else {
        $number = array();
        for ($i = 1; $i <= 25; $i++) {
            //array_push($number, rand(0, 99));
            $number[$i - 1] = rand(0, 99);
        }
    ?>
        <table border="1" align="center">
            <tr>
                <td colspan="5" align="center" width="60">Bingo Game</td>
            </tr>
            <?php
            $nLine = 1;
            foreach ($number as $ele) {
                echo " <td align='center' width='60'>" . $ele . "</td>";
                if ($nLine % 5 == 0) echo "</tr>";
                $nLine++;
            }
            ?>
            <tr>
                <td colspan="5" align="center" width="60">
                    <form action="#" method="post">
                        <input type="submit" name="btn" value="START">

                        <input name="numbers" type="hidden" value="<?php echo serialize($number); ?>" />
                    </form>


                </td>
            </tr>
        </table>
    <?php
    }
    ?>
</body>

</html>