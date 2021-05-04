<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Array</title>
</head>

<body>

    <?php

    function show_form()
    {
        echo '<form method="get" action="test24.php">';
        $Maxnum = 5;
        $score1 = rand(0, 100);
        $score2 = rand(0, 100);
        $score3 = rand(0, 100);
        $score4 = rand(0, 100);
        $score5 = rand(0, 100);
        $score6 = rand(0, 100);
        $score7 = rand(0, 100);
        $score8 = rand(0, 100);
        $score9 = rand(0, 100);
        $score10 = rand(0, 100);
        $score11 = rand(0, 100);
        $score12 = rand(0, 100);
        $score13 = rand(0, 100);
        $score14 = rand(0, 100);
        $score15 = rand(0, 100);
        $score16 = rand(0, 100);
        $score17 = rand(0, 100);
        $score18 = rand(0, 100);
        $score19 = rand(0, 100);
        $score20 = rand(0, 100);
        $score21 = rand(0, 100);
        $score22 = rand(0, 100);
        $score23 = rand(0, 100);
        $score24 = rand(0, 100);
        $score25 = rand(0, 100);

        echo '<center><font size="4" color="blue"> lukky number </font></center>';
        echo '<table border="1" align="center">';
        echo '<tr >';
        echo '<td >' . $score1 . '</td>';
        echo '<td >' . $score2 . '</td>';
        echo '<td >' . $score3 . '</td>';
        echo '<td >' . $score4 . '</td>';
        echo '<td >' . $score5 . '</td>';
        echo '</tr>';
        echo '<tr >';
        echo '<td >' . $score6 . '</td>';
        echo '<td >' . $score7 . '</td>';
        echo '<td >' . $score8 . '</td>';
        echo '<td >' . $score9 . '</td>';
        echo '<td >' . $score10 . '</td>';
        echo '</tr>';
        echo '<tr >';
        echo '<td >' . $score11 . '</td>';
        echo '<td >' . $score12 . '</td>';
        echo '<td >' . $score13 . '</td>';
        echo '<td >' . $score14 . '</td>';
        echo '<td >' . $score15 . '</td>';
        echo '</tr>';
        echo '<tr >';
        echo '<td >' . $score16 . '</td>';
        echo '<td >' . $score17 . '</td>';
        echo '<td >' . $score18 . '</td>';
        echo '<td >' . $score19 . '</td>';
        echo '<td >' . $score20 . '</td>';
        echo '</tr>';
        echo '<tr >';
        echo '<td >' . $score21 . '</td>';
        echo '<td >' . $score22 . '</td>';
        echo '<td >' . $score23 . '</td>';
        echo '<td >' . $score24 . '</td>';
        echo '<td >' . $score25 . '</td>';
        echo '</tr>';

        echo '</table>';
        echo '<center><input name = "b1" type="submit" value=" Start Game " /></center>';
        echo '</form>';
    }

    if (isset($_GET['b1'])) {
        $S1 = $_GET['score1'];
        $S2 = $_GET['score2'];
        $S3 = $_GET['score3'];
        $S4 = $_GET['score4'];
        $S5 = $_GET['score5'];
        $S6 = $_GET['score6'];
        $S7 = $_GET['score7'];
        $S8 = $_GET['score8'];
        $S9 = $_GET['score9'];
        $S10 = $_GET['score10'];
        $S11 = $_GET['score11'];
        $S12 = $_GET['score12'];
        $S13 = $_GET['score13'];
        $S14 = $_GET['score14'];
        $S15 = $_GET['score15'];
        $S16 = $_GET['score16'];
        $S17 = $_GET['score17'];
        $S18 = $_GET['score18'];
        $S19 = $_GET['score19'];
        $S20 = $_GET['score20'];
        $S21 = $_GET['score21'];
        $S22 = $_GET['score22'];
        $S23 = $_GET['score23'];
        $S24 = $_GET['score24'];
        $S25 = $_GET['score25'];


    } else {
        show_form();
    }
    ?>
</body>

</html>