<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Func_get_args e Func_num_args</title>
</head>
<body>
    <h1>Teste Func_get_args e Func_num_args</h1>
    <?php
    function calculamedia(){
        $args = func_get_args();
        $num = func_num_args();
        $soma = 0;
        for($i=0;$i<$num;$i++){
            $soma += $args[$i];
        }
        return $soma/$num;
    }

    #$numeros = "1,2,3,4,5,6,7,8,9,10";
    $media = calculamedia(1,2,3,4,5,6,7,8,9,10);
    echo "A média é : $media";
    ?>
</body>
</html>