<?php

 class Usuario{

 	private $usuario;
 	private $senha;
 	private $cor;
 	private $nasci;

 	public function setUsuario($usuario)
 	{
 		$this->usuario=$usuario;
 	}

 	public function getUsuario()
 	{

 	    return $this->usuario;
 	}

 	public function setSenha($senha)
 	{
 		$this->senha=$senha;
 	}

 	public function getSenha()
 	{

 	    return $this->senha;
 	}

 	public function setCor($cor)
 	{
 		$this->cor=$cor;
 	}

 	public function getCor()
 	{

 	    return $this->cor;
 	}

 	public function setNasci($nasci)
 	{
 		$this->nasci=$nasci;
 	}

 	public function getNasci()
 	{

 	    return $this->nasci;
 	}

 	public function verificarAniversário($nasci)
 	{
 		$hoje=date("m-d");
        $nasci=substr($nasci,5);
 		if($nasci==$hoje){
 			return true;
 		}else{
 			return false;
 	}
 }




}
?>