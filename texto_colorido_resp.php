<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Texto Colorido</title>
	<link rel="stylesheet" href="style.css">
	<?php
			$nome = $_POST["nome"];
			$tamanho = $_POST["tamanho"];
			$cor = $_POST["cor"];
	?>

	<style>
		p.resultado{
				color: <?php echo $cor ?>;
				font-size: <?php echo $tamanho ?>;
			}
	</style>
	
</head>
<body>
	
	
	<div>
		<h1>Resposta do Texto Colorido</h1>
		<?php 
			echo "O resultado foi : <p class='resultado'>$nome</p>";
			if ($nome=="Renato Azevedo") {
				echo "<br>Nome do author";
			}
			else {
				echo "<br>Não é o author";
			}
		?>
		
		<a href="texto_colorido.php">Voltar</a>


	</div>
	
</body>
</html>