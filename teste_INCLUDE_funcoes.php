<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Include Funções</title>
</head>
<body>
    <?php
    #include_once "funcao_varias.php";
    #include "funcao_varia.php"; '=> continua a executar !!! Vai imprimir o AA !!!!
    #require "funcao_varia.php";  => Vai PARAR aqui !!! NÃO imprime o AA !!!
    require_once "funcao_varias.php";
    $aa = 100;
    echo "<br>AA = $aa";

    $numero1 = "0,1,2,3,4,5,6";
    $media = media(0,1,2,3,4,5,6);
    echo "<h1>Teste Include Funções</h1>";
    echo "<h1>Teste Média</h1>";
    echo "A média de dos numeros $numero1 é : $media";
    echo "<h1>Teste Produto</h1>";
    $numero2 = "1,2,3,4,5,6";
    $produto = produto(1,2,3,4,5,6);
    echo "O produto dos numeros $numero2 é : $produto";
    echo "<h1>Teste Raiz</h1>";
    $numero3 = "64,3";
    $raiz = raiz(64,3);
    echo "A raiz de " . substr($numero3,0,2) . " e indice " . substr($numero3,3,1). " é : " . $raiz;
    echo "<h1>Teste Potência</h1>";
    $numero4 = "2,3";
    $potencia = potencia(2,3);
    echo "A potência de " . substr($numero4,0,1) . " e indice " . substr($numero4,2,1). " é : " . $potencia;

    
    ?>
    
</body>
</html>