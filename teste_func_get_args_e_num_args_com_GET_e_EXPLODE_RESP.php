<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESP Teste Func_get_args e Func_num_args com GET e EXPLODE</title> 
</head>
<?php #incompleto !!!!!!!!!!!!!!!!!!!!!!!!! ?>
<body>
    
    <h1>RESP Teste Func_get_args e Func_num_args com GET e EXPLODE</h1>
    <?php
    $numeros = $_GET["numeros"];

    function calculamedia(){
        $lenth = 1;
        $args = func_get_args();
        #$vetargs = explode(",",$args);
        $argsbreak = array_chunk( $args, 1 );
        var_dump($argsbreak);
        $num = func_num_args();
        $soma = 0;
        for($i=0;$i<$num;$i++){
            $soma += $args[$i];
        }
        return $soma/$num;
    }

    
    ?>
</body>
</html>