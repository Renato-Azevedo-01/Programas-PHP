<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste EXPLODE e COUNT</title>
</head>
<body>
<h1>Teste do "EXPLODE"  e "COUNT" em vetores:</h1>
   <?php 
      $numeros = $_GET["numeros"];
      $vetnumeros = explode(",",$numeros);
      $contador = count($vetnumeros);
      $soma = 0;
      for($i=0;$i<$contador;$i++){
            $soma +=  $vetnumeros[$i];
        }
       
      echo "SOMA = $soma <br>";
      echo "MÉDIA : " . $soma/$contador;     
   ?>
   <br>
   <a href="teste_explode_count_vetores.php">Retornar</a>
</body>
</html>