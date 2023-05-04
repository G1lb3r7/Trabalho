<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exercício 1</title>
</head>
<body>
	<form action="exercicio1.php" method="GET">
		<h1>Par ou Impar</h1>
		<p>Digite um número <input type="number" name="numero" required></p>
		<p>Digite um número&ordm;:<input type="number" name="numero2"
		required></p>
		<p> <input type="submit" name="botao" value="Verificar"></p>
	</form> 
<?php
    if (isset($_GET['botao'])) {
    	$numero=$_GET['numero'];
    	if($numero%2==0) {
    		echo "<h2>É Par!</h2>";
    	}else{
    		echo "<h2>É ímpar!</h2>";
    } 
}

?>
</body>
</html>