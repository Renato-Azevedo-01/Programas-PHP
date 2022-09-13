<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste da variação do PRINTF</title>
</head>
<body>
    <h1>Teste da variação do PRINTF e PRINTR</h1>
    <h3>Variações %d , %f , %u , %s</h3>
    <?php
    $produto = "Leite";
    $preco = 1000.37;
    printf ("O preço do %s é R$ %.2f " , $produto, $preco);
    echo "<br>O preço do $produto é R$ " . number_format($preco,2,",",".");
    $vetor = array(0=>"a",1=>"b",2=>"c");
    echo"<br> Print_r: ";
    print_r($vetor);
    echo"<br> Var_dump : ";
    var_dump($vetor);
    echo"<br> Var_export: ";
    var_export($vetor);
    $texto="Loremipsum dolor sit amet, consectetur adipisicing elit. "; 
    
    $resultado = wordwrap($texto,10,"<br>\n",false);
    echo "<br><br>$resultado";
    
    $totcaracter = strlen($texto);
    echo "<br><br>Total de caracteres é de : $totcaracter";
    
    $totpalavras = str_word_count($texto,0);
    echo "<br><br>Total de caracteres é de : $totcaracter";
    
    $criavetor = str_word_count($texto,1);
    echo "<br><br>Vetor com indice sequencial : ";
    var_dump($criavetor);
    
    $criavetorindicedif = str_word_count($texto,2);
    echo "<br><br>Vetor com indice tamanho das palavras : " ;
    var_dump($criavetorindicedif);

    $v = array(0 => "Renato");
    $v1 = array(1 => "Azevedo");
   
    $texto1 = array_merge($v,$v1);
    echo"<br>";
    var_export($texto1);

    $texto2 = "renato azevedo";
    echo "<br>" . strrev ($texto2) . "<br>";   

    ?>    

		
   <table border=1>
    <th>        
        Veja como fica
    </th>
        <?php
            $vet = array("Nome"=>"Renato" , "Idade" => 53);
            foreach($vet as $k => $c){
                echo"
                <br>
                <tr>
                    <td>
                        Para o índice : $k , temos o valor $c
                    </td>
                </tr>";
            }        
        ?>
    </table>

</body>

</html>