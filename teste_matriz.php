<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz</title>
</head>
<body>
    <div style="margin-bottom:-250px">
    <h1>Teste com Matrizes</h1>
    <?php
    $v = array( "Nome"=>"Renato",    
                "Idade"=>53,
                "email" => "renato@hotmail.com",
                "Endereço" => "Av da Invernada");
    echo"O vetor é: <br>";
    foreach($v as $k => $c){
       echo "Índice $k é $c<br>";
    }
    echo"<br><br>";

    $m = array(
        0 => array( "Nome"=>"Renato",    
    "Idade"=>53,
    "email" => "renato@hotmail.com",
    "Endereço" => "Av da Invernada"),
        1 => array( "Nome"=>"Márcia",    
    "Idade"=>45,
    "email" => "marcia@hotmail.com",
    "Endereço" => "Av da Consolação"));

    var_dump($m);

foreach($m as $i => $valor){
    foreach($valor as $k => $c){
        echo "<td>$i , $k , $c <br></td>";
        echo"<br>";
    }
    
}   
    ?>
</div>

<div><table border = 1>
    <th>Veja como fica</th>
    <?php 
    
    foreach($m as $i => $valor){
        foreach($valor as $k => $c){
            echo "<br><tr><td>$i</td><td>$k</td><td>$c</td> <br></tr>";            
        }        
    }
    ?>
</table>
</div>
</body>
</html>