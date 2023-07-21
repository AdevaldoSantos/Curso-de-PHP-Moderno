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
        $frase = "Estou aprendendo PHP no Curso em Vídeo de PHP";
        $count = substr_count($frase, "PHP");
        echo "PHP encontrado $count vezes";

            echo "<br>";
        
        $site = "Curso em Vídeo";
        $sub = substr($site, 0, 5); // Pode usar número negativo. Há várias combinações.
        echo "$sub ";

            echo "<br>";

        $nome = "Guanabara";
        $strpad = str_pad($nome, 30, ".", STR_PAD_RIGHT); // STR_PAD_RIGHT, STR_PAD_CENTER, STR_PAD_LEFT.
        echo "Meu professor $strpad é feio";

            echo "<br>";

        $txt = str_repeat("Php", 5);
        print("O texto gerado foi $txt");

        echo "<br>";

        $frase2 = "Gosto de estudar Programação";
        $strreplace = str_replace("Programação", "PHP", $frase2);
        print($strreplace);

    ?>
</body>
</html>