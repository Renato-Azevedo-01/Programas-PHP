<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste do While ... continue ... break</title>
</head>
<body>
    <?php         
        $num = $_GET["num"];	
        $soma = 0;	
        $numfixo = $num;	
        $stat = 0;       	
        while ($num >1) {	           
            $num -=1;            
            if($numfixo%$num == 0 && $num > 1){                
                echo"$numfixo não é primo";
                $stat = 0;
                break;
            }  
            else{
                $stat = 1;
                continue;
            }
        }	
        if ($stat == 1){	
            echo"O número $numfixo  é primo !";
        }        
    ?>

   
</body>
</html>