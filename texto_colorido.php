<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Texto Colorido</title>
	<link rel="stylesheet" href="style.css"> 
</head>
<body>
	<div>
		<h1>Texto Colorido</h1>
		<form action="texto_colorido_resp.php" method="post">
		<label for="nome">Digite o seu nome: </label>
		<input type="text" id = "nome" name="nome" placeholder="Entre com seu nome">
		<br>
		<label for="tamanho" >Escolha o tamanho: 
		<select name="tamanho" id="tamanho"> 
			<option value="10pt">10</option>
			<option value="15pt">15</option>
			<option value="20pt">20</option>
			<option value="25pt">25</option>
		</select>
		<label for="cor">Escolha a cor: </label>
		<input type="color" name="cor" id="cor" value="#ffff00"><br>
		<input type="submit" value="Enviar">
		</form>


	</div>
	
</body>
</html>