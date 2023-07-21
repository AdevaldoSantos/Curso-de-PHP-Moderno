<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <form action="tabuada02.php" method="get">
    <select name="num">
        <?php 
            for($c=1;$c<=10;$c++){
                echo "<option>$c</option>";
            }
        ?>      
    </select>
    <input type="submit" value="tabuada">
    </form>
</body>
</html>