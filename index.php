<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Reload</title>
	<style>
		:root{
			font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
			letter-spacing: 3px;
			font-style: italic;
		}
		body{
			background:black;
			color:white;
		}
		#master{
			display:flex;
		}
		#forma{
			border:solid 1px white;
			border-radius: 10px;
			width: 40%;
			display:flexbox;
			height: 150vh;
		}
		#titulo{
			background-color:lightblue;
			color:blue;
			text-align:center;
			margin:auto;
			margin-bottom:15px;
			border-radius: 10px 10px 0px 0px;
		}
		h3{
			padding-left:15px;
		}
	</style>
</head>
<body>
<div id="geral"><h1>PHP Geral</h1></div>
<div id = "master">
	
	<div id="forma">	
		<div>
				<h1 id="titulo">Teste de PHP</h1>
		</div>
		<?php

use function PHPSTORM_META\type;

			$salario = (float) $_GET["a"];
			$salreal = (double) $_GET["a"];
			$nome = $_GET["b"];
			echo "<h3> O salario de $nome foi de R$ " .   number_format($salario,2,",",".") . "</h3>";
			echo "<h3> A metade do salário é de R$ " . number_format($salreal/2,2,",",".") . "</h3>";
			print "<h3>O número 3 elevado ao quadrado é igual a ". pow(3,2). "</h3>";
			printf ("<h3>O valor absoluto de -3 é : " . abs(-3) . "</h3>");
			echo "<h3> O Valor inteiro de 3,5 é : " . intval(3.5);
			echo "<h3> O Valor arredondado para cima de 3,5 é : " . ceil(3.5) . "</h3>";
			echo "<h3> O Valor arredondado de 3,5 é : " . round(3.5) . "</h3>";	
			echo "<h3> O Valor arredondado de 3,4 é : " . round(3.4) . "</h3>";
			echo " <h3>O Valor arredondado para baixo de 3,5 é : " . floor(3.5) . "</h3>";
			echo "<h3> A raiz quadrada de 9 é : " . sqrt(9) . "</h3>";
			$aa = $_GET["ano_atual"];
			echo "<h3>O ano atual é :  $aa </h3>";
			echo  "<h3>E o ano anterior é:  " . --$aa . "</h3>";
			$aaa = "te ";
			$bbb = "amo";
			$aaa .=$bbb;
			print "<h3>$aaa</h3>";
			?>
	</div>
	<div id="forma">	
		<div><h1 id="titulo">Teste de PHP cont...</h1></div>
		<?php
			echo "<h3>Operador Ternário</h3>";
			$x = $_GET["x"];
			$y = $_GET["y"];
			$z = $x == $y ? $x + $y : $x - $y;
			print "<h4>z = $z</h4>";
			echo "<h3>Array</h3>";

			
			$array = array(	"foo" => "bar",	42    => 24,
				"multi" => array( "dimensional" => array( "mesmo" => "foo" )));
			
				echo"<br>";
			/*var_dump($array["multi"]);
			echo"<br>";
			var_dump($array["multi"]["dimensional"]);
			echo"<br>";
			var_dump($array["multi"]["dimensional"]["mesmo"]);
			echo"<br>"; */
			unset($array["multi"]["dimensional"]["mesmo"]);
			var_dump($array);

			

		?>
		<div><h1>Teste do Form com POST</h1></div>
		<form action="index1.php" method="post">
			<fieldset><legend>Campos</legend>
			<label for id="nome1">Digite seu nome: </label>
			<input type="text" id="nome1" name="nome" placeholder="Digite o seu nome" required><br>
			<label for id="ano">Ano de Nascimento: </label> 
			<input type="number" id="ano" name = "ano" placeholder="Digite o ano de nascimento">
			<h3>Informe dois números para somar:</h3>
			<label for id="n1" >Primeiro número: </label>
			<input type="number" id="n1" name="n1" placeholder="Insira o primeiro número">
			<br><label for id="n2" >Segundo número: </label>
			<input type="number" id="n2" name="n2" placeholder="Insira o segundo número">
			<br>
			<label for id="sexo">Informe o sexo:</label>
			<input type="radio" id = "sexo" name = "sexo" value="Masculino" checked>Homem</input>
			<input type="radio" id = "sexo" name = "sexo" value="Feminino">Mulher</input><br>
			<input type="color" id="cor" name="cor" value="#0000">
			<input type="submit" value="Enviar">
			</fieldset>
		</form>
	</div>
</div>
</body>
</html>
