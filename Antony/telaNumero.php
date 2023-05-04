<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calculos com números</title>
	<link rel="stylesheet" type="text/css" href="css/calculadora.css">
</head>
<body>
	<form action="telaNumero.php" method="GET">
		<h1>Cálculos simples</h1>
		<p>Digite em um número:<input type="number" name="numero1"
		required></p>
		<p>Digite o 2&ordm;:<input type="number" name="numero2"
		required></p>
		<p>Operação:
			<input type="radio" name="operacao" value="soma">+
			<input type="radio" name="operacao" value="subtracao">-
			<input type="radio" name="operacao" value="multiplicar">x
			<input type="radio" name="operacao" value="dividir">&divide;
		<p><input type="submit" name="calcular" value="Calcule">
		</p>
	</form>
<?php

if(isset($_GET['calcular'])){
	if(isset($_GET['operacao'])){
		require_once 'Numero.php';
		$numero=new Numero();
		$numero->setNumero1($_GET['numero1']);
		$numero->setNumero2($_GET['numero2']);

		switch ($_GET['operacao']){
			case 'soma':
			    echo $numero->somar($numero->getNumero1(),$numero->getNumero2());
				break;
			case'subtracao':
			    echo $numero->subtrair($numero->getNumero1(),$numero->getNumero2());
			    break;
			case 'multiplicar':
			    echo $numero->multiplicar($numero->getNumero1(),$numero->getNumero2());
			    break;
			case'dividir':
			    echo $numero->dividir($numero->getnumero1(),$numero->getNumero2());
			    break;
			default:
			echo "<h2>Opção inválida</h2>";
			break;
		}
		}else{
			echo "<h2>Selecione uma operação!</h2>";
		
		
    
		         
			
		}
	}


?>
</body>
</html>