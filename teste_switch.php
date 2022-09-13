<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Switch</title>
</head>
<body>
    <h1>Teste do Switch</h1>
    <div>
        <form action="teste_switch_resp.php" method="get">
            <label for="numero1">Entre com o primeiro número: </label>
            <input type="number" id="numero1" name="numero1" placeholder="1º número">
            <br>
            <label for="numero2">Entre com o segundo número: </label>
            <input type="number" id="numero2" name="numero2" placeholder="2º número">
            <br>
            <label for="opcao">Escolha a opção: </label>
            <br>
            <input type="radio" name="opcao" id="opc1" value=1>Raiz</input>
            <br>
            <input type="radio" name="opcao" id="opc2" value=2>Potência</input>
            <br>
            <input type="submit" value="Escolha">
        </form>
    </div>
</body>
</html>