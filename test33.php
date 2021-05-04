<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ตัวอย่างที่ 10-6 </title>
</head>

<body>
    <?php
    // open file
    $fp = @fopen("444.jpg", "rb");
    if ($fp) {
        $fpnew = @fopen("new_444.jpg", "wb");
        while ($ln = @fread($fp, 1024)) {
            fwrite($fpnew, $ln);
        }

        @fclose($fp);
        @fclose($fpnew);
        copy("444.jpg", "444_copy.jpg");
        echo "<h3>File Copy Finish...</h3>";
        echo "<image src='new_444.jpg' width='320' height='240'>";
    } else {
        die("ไม่สามารถเปิดไฟล์ koala.jpg ได้ !");
    }
    ?>
</body>

</html>