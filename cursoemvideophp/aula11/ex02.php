<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <div>
        <form method="get" action="ex02.php">
            <?php 
            $c = 1;
            while ($c <=5 ) {
                echo "valor $c: <input type='number' name='v$c' max='100' min='0' value='0'> <br>";
                $c++;
            }        
            ?>
            <input type="submit" value="Enviar" class="botao">
        </form>
    </div>
</body>
</html>