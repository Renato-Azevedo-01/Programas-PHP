<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste parametro por referencia</title>
</head>
<body>
    <h1>Teste passagem de parametro por VALOR e por REFERÊNCIA</h1>
    <?php 
    $a = 10;
    $b = $a;
    $c = &$a;
    echo "<h1>Alterando b e c  por valor de a :</h1>";
    echo "a = $a <br>";
    echo "b = $b <br>";
    echo "c = $c <br>";
    echo "<h1>Alterando c  = 20 com c = &$ a , o a se altera também :</h1>";

    $a = 10;
    $b = $a;
    $c = 20;
    $c = &$a;

    echo "a = $a <br>";
    echo "b = $b <br>";
    echo "c = $c <br>";
    echo "<h3>Repare que a também foi alterada (por referência)</h3>"


    
    
    ?>
</body>
</html>