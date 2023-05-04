<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro</title>
</head>
<body>
	<form action="restrita.php" method="POST">
		<h1>Cadastro</h1>
		<p>Usuário:<input type="text" name="usuario" size="30"
			maxlength="30" pattern="[0-9A-Za-z_]{3,30}" title="Letras ou números sem caracteres especiais" required></p>
			<p>Senha:<input type="password" name="senha" size="10" maxlength="10" required></p>
			<p>Cor favorita:<input type="color" name="cor" required></p>
			<p>Data de nascimento:<input type="date" name="nasci" required></p> 
			<p><input type="submit" name="enviar" value="Cadastrar"></p>
		</form>

</body>
</html>