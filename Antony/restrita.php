<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Área restrita</title>
<?php
    require_once 'Usuario.php';
    $usuario=new Usuario();
    $usuario->setUsuario($_POST['usuario']);
    $usuario->setSenha($_POST['senha']);
    $usuario->setCor($_POST['cor']);
    $usuario->setNasci($_POST['nasci']);

    $cor="#000000";
    if($usuario->getCor()=="#000000"){
    	$cor="#ffffff";
    }





?>
</head>
<body style="background-color: <?php echo $usuario->getCor();?>;">
	<h1 style="color: <?php echo $cor;?>;">
		Bem vindo, <?php echo $usuario->getUsuario(); ?> !
	</h1>
<?php
     if($usuario->verificarAniversario($usuario->getNasci())){
     	echo "<h2 style='color:$cor;'>Parabéns pelo Aniversário!</h2>";
     }

?>
</body>
</html>