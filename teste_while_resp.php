
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resp While</title>
</head>
<body>
<?php
     echo"<br> <h1>While e Do ... While</h1>";
    $num= $_GET["num"];
    while ($num > 0){
            echo " $num -> ";
            $num -=1;
        }    
        echo "<br>" ;
    do {
        $num  +=1;
        echo "$num => ";
    }
    while($num<10);
    
   
    echo "fim !";
    $fat = 1;
    echo"<br> <h1>Fatorial</h1>";
    echo"Número : $num";
    echo "<br>Fatorial de $num é: ";
    while($num>0){
        echo"$num  ";
        if ($num == 1) {echo"=";}
        else{echo"*";}
        $fat = $fat * $num;
        $num -=1;
        
    }
        echo"$fat -> Fim !!!";
    ?>
    <br><a href="teste_while.php">Voltar</a>
    

</body>
</html>