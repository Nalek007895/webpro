<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input numeric</title>
</head>
<body>
    <form method="get" action="redcal.php">

               <table border="0"align="center"width="300">
                    <td colspan="2" align="center">
                        <strong> randomoddeven  </strong>
                    </td>
               <tr>
                        <td>row :</td>
                        <td>
                             <input type="number"name="num1"max=""min="1"step="1"value="">                    
                        </td>
                    </tr>
                    <tr><td>colunn :</td>
                        <td>
                             <input type="number"name="num2"max=""min="1"step="1"value="">                    
                        </td>
                       
                        
               </tr>
               
               <tr>
               <td colspan="2" align="center">
               <input name="btnSubmit"type="submit"value="submit"
               style = "color:white; background-color:black; border:none; border-radius: 4px; padding:10px 20px;">
               <input name="btnReset"type="reset"value="Clear"
               style = "color:black; background-color:yellow; border:none; border-radius: 4px; padding:10px 20px;">
               </td>
               </tr>
               </table>

    </from>
</body>
</html>