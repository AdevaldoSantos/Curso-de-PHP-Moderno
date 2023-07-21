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
        $f = "Eu estou estudano PHP";
        $c = str_word_count($f,1);
        print_r($c);

        echo "<br>";   

        $s = "Curso em video";
        $v = explode(" ", $s);
        print_r($v);

        echo "<br>"; 

        $n = "Adevaldo";
        $v2 = str_split($n);
        print_r($v2);

        echo "<br>"; 

        $v3[0] = "Adevaldo";
        $v3[1] = "santos";
        $v3[2] = "filho";
        $t = implode(" ",$v3); //join()
        print($t);
        
    ?>
</body>
</html>