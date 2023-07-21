<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FunçõesPHP</title>
</head>
<body>
    <pre>
        <?php 
            $v = array("A", "J", "F", "Y", "O");
            $v[]="S";
            array_push($v, "L");
            $v[]="R";
            array_unshift($v, "I");
            array_pop($v);
            array_shift($v);
            sort($v); //rsort(), asort(), arsort(), ksort(), krsort();
            echo "<br>";
            echo "O vetor tem ". count($v) . " elementos";
            echo "<br>";
            print_r($v);
            
            //var_dump($v);
        ?>
    </pre>
    
</body>
</html>