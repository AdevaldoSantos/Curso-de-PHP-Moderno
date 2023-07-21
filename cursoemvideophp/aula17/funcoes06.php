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
        $nome = "Adevaldo Santos";
        $nome2 = strtolower($nome); //strtolower();
        echo "Seu nome com <strong>strtolower</strong>  é $nome2";
            echo "<br>";
        $nome3 = strtoupper($nome);
        echo "Seu nome com <strong>strtoupper</strong> é $nome3";
            echo "<br>";
        $nome4= ucfirst($nome);
        echo "Seu nome com <strong>ucfirst</strong>  é $nome4";
            echo "<br>";
        $nome5 = ucwords($nome);
        echo "Seu nome com <strong>ucwords</strong>  é $nome5";
            echo "<br>";
        $nome6 = strrev($nome);
        echo "Seu nome com <strong>strrev</strong> é $nome6";
    ?>
</body>
</html>