<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>

    <?php 
        
        $n1 = isset($_GET["n1"])?$_GET["n1"]:0;
        $n2 = isset($_GET["n2"])?$_GET["n2"]:0;
        while ($n1 <= $n2) { 
        echo $n1 . "<br>";
        $n1++;
        }

        

    ?>
    
    
</body>
</html>