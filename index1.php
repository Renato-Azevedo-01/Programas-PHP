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
			height: 90vh;
		}
		#titulo{
			background-color:lightblue;
			color:blue;
			text-align:center;
			margin:auto;
			margin-bottom:15px;
			border-radius: 10px 10px 0px 0px;
		}
		
		
	</style>
</head>
<body>
<div id="geral"><h1>PHP Geral</h1></div>
	<div id = "master">	
		<div id="forma">	
			<div>
					<h1 id="titulo">Recebendo Valores - PHP</h1>
			</div>
			<?php

			$nome = $_POST["nome"];
			$ano =  $_POST["ano"];
			$idade = date("Y") - $ano;
			echo "O nome recebido foi: $nome ! <br>";
			echo "Ano de nascimento: $ano <br>";
			echo "Você tem : $idade anos <br>";
			
			function soma($s1 , $s2) {
				$s3 = $s1 + $s2;
				echo "<br>A soma dos números $s1 + $s2 = $s3";
			}
	
			
			$num1 = $_POST["n1"];
			$num2 = $_POST["n2"];
			$sexo = $_POST["sexo"];
			$cor = $_POST["cor"];
			
			if ($num1 == '' ){
				$num1 = 1;
			}
			if ($num2 == '' ){
				$num2 = 1;
			}
			soma($num1,$num2);
			#echo "<br>A soma dos números $num1 + $num2 = $soma";
			echo "<br><h2 class = 'cor'>O Sexo é : $sexo</h2>";
			
			?>
		

		<a href='http://localhost/programas_php/index.php'>Retornar</a>;
		</div>
	</div>


</div>
</body>
</html>
