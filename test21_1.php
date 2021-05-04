<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>III</title>
</head>
<body>
    <form method="get" action="test21_2.php">
    <b>นักศึกษา</b><br>
    <b>รหัสนักศึกษา</b>
    <input type="text" name="T1" size="15" value="" /><br>
    <b>ชื่อ-นามสกุล</b>
    <input type="text" name="T2" size="15" value="" /><br>
    <b>เพศ</b>
    <input type="radio" name="s1" size="1" value="ชาย">ชาย
    <input type="radio" name="s1" size="1" value="หญิง">หญิง<br>

    <b>หลักสูตร
    <select name = "gender">
        <option value="IT">IT</option>
        <option value="ITI">ITI</option>
    </select>
    </b>
    <br>
    
    <b>เกรด</b>
    <input type="text" name="T3" size="15" value="" /><br>


    <input name = "btnSubmit" type="submit" value=" Ok " />
    <input type="reset" value=" Clear " />
</body>
</html>