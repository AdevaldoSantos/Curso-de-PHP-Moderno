<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        function teste(&$x) {
            $x += 2;
            echo "O valor de X é $x <br>";
        }

        $a = 3;
        teste ($a);
        echo "O valor de A é $a";
    ?>
</body>
</html>