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
        $t = "Olá, meu nome é adevaldo santos do sacramento filho. Eu estou escrevendo tudo isso e enrolando bastante porque tenho que escrever um texto gigante para testar uma função chamada wordwrap";
        $r = wordwrap($t, 50, "</br>", false);
        $a = strlen($t);
        $b = trim($t);
        $c = ltrim($t);
        $d = rtrim($t);
        echo "$r <br> $a <br> $b <br> $c <br> $d" ;
        
        
    ?>
</body>
</html>