<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FunçõesPHP</title>
</head>
<body>
    <?php 
        $frase = "Estou aprendendo PHP";
        $pos = strpos($frase, "PHP");
        echo "$frase <br> A string PHP foi encontrada na posição $pos";

            echo "<br>";

        $ipos = stripos($frase, "php");
        echo "A string PHP foi encontrada na posição $ipos";
    ?>
</body>
</html>