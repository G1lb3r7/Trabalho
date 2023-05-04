<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exercício 2</title>
</head>
<body>
	<form action="exercicio2.php" method="GET">
		<h1>Maior ou Menor</h1>
		<p>Digite um número <input type="number" name="numero1" required></p>
		<p>Digite o 2&ordm;:<input type="number" name="numero2"
		required></p>
		<p>Digite o 3&ordm;:<input type="number" name="numero3" required></p>
		<p> <input type="submit" name="botao" value="Verificar"></p>
	</form> 
<?php
    if(isset($_GET['botao'])) {
    	$numero1=$_GET['numero1'];
    	$numero2=$_GET['numero2'];
    	$numero3=$_GET['numero3'];    	
if($numero1>$numero2&&$numero1>$numero3){
	echo "O maior $numero1";
}else if($numero2>$numero1&&$numero2>$numero3){
	echo "O maior $numero2";	
}else if($numero3>$numero1&&$numero3>$numero2){
	echo "O maior $numero3";
}
}
?>
</body>
</html>