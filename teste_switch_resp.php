<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta Switch</title>
</head>
<body>
    <h1>Resp Switch</h1>
    <?php
        $opcao = $_GET["opcao"];
        $num1 = $_GET["numero1"];
        $num2 = $_GET["numero2"];

        #echo "Numero1 = $num1 , Numero2 = $num2 , Opção = $opcao";
        switch($opcao) {
            case 1:
                echo "<br>Opção 1 : A Raiz de $num1 = " . sqrt($num1);
                echo "<br>e a de $num2 = "  . sqrt($num2);
                break;
            case 2:
                echo "<br>Opção 2 : O $num1 elevado a $num2 = " . pow($num1,$num2);
                break;
        }
       
    ?>
    <br>
    <a href="teste_switch.php">Voltar</a>
</body>
</html>