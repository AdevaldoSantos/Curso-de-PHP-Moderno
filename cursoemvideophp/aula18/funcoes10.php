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
        $v = array(0=>"A", 1=>9, 3=>8, 6=>7);
        unset($v[0]);
        print_r($v);

            echo "<br><br>";

        $v2 = array("nome"=>"Adevaldo", "idade"=>21, "peso"=>105);
        $v2["malha"] = true;
        foreach($v2 as $g => $u) {
            echo "O campo $g possui o conteudo $u <br>";
        }
            echo "<br><br>";
        
        // Matris em PHP
        $m = array( array(2,5,7),
                    array(3,6,8),
                    array(4,7,9),
                    array(5,8,10));
        $m[0] [1]= $m[3] [2];
        print_r($m);


        

    ?>
</body>
</html>