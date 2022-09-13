<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste For</title>
</head>
<body>
   <h1>Resposta da Função (como procedimento) :</h1>
   <?php 
        $num1=$_GET["num1"];
        $num2=$_GET["num2"];

        function soma($n1 , $n2){
            echo "O resultado da soma de $n1 + $n2 =  " . ($n1 + $n2);
        }

        soma($num1,$num2);
   ?>
    <h1>Resposta da Função (como função com return) :</h1>
   <?php 
       
        function soma1($n1 , $n2){
            return $n1 + $n2;
        }

       $num3 =  soma1($num1 , $num2);
       echo "O resultado de N3 é = $num3";
   ?>
</body>
</html>