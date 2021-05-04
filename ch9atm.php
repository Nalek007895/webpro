<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input numeric</title>
</head>
<body>
    <form method="get" action="ch9atmcal.php">

               <table border="1"align="center"width="300">
               <tr>
                        <td>Money</td>
                        <td>
                             <input type="number"name="num1"max=""min="1"step="1"value="">                    
                        </td>
                        
               </tr>
               
               <tr>
               <td colspan="2" align="center">
               <input name="btnSubmit"type="submit"value="Submit">
               <input name="btnReset"type="reset"value="Clear">
               </td>
               </tr>
               </table>

    </from>
</body>
</html>