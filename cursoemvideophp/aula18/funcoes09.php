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
        $n = array(1,2,3,4,5,6);
        $n[2] = 7;
        $n[] = 8;
        print_r($n);

            echo "<br><br>";
        
        $n2 = range(0,100,5);
        print_r($n2);

            echo "<br><br>";

        $c = range(5,20,2);
        foreach($c as $v) {
            echo "$v ";
        }
        
    ?>
</body>
</html>