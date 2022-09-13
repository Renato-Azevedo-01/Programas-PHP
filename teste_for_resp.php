<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta do For</title>
</head>
<body>
    <h1>Resposta da verificação se o número é primo</h1>
    <?php 
        $num = $_GET["num"];
        $soma = 0;
        echo "O número $num que possui os múltiplos ";
        for($i= $num ; $i>=1; $i--){
            if ($num%$i == 0){
                $soma +=1;
                if ($i == 1){
                    echo "$i => ";
                }
                else{
                    echo "$i , ";

                    }
                }
            }
        
        if($soma>2){
            echo " não é primo <br>";
        }
        else{
            echo " é primo";
        }
        
    ?>
    <a href="teste_for.php">Voltar</a>
</body>
</html>