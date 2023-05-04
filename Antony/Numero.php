<?php

class Numero{

	private $numero1;
	private $numero2;

	public function setNumero1($numero1){
		$this->numero1=$numero1;
	}	

	public function getNumero1(){
		return $this->numero1;
	}

	public function setNumero2($numero2){
		$this->numero2=$numero2;
	}	

	public function getNumero2(){
		return $this->numero2;
	}

	public function somar($n1,$n2)
	{
		return $n1+$n2;
	}
	
	public function subtrair($n1,$n2)
	{

		return $n1-$n2;
	}

	public function multiplicar($n1,$n2)
	{

		return $n1*$n2;
	}
	public function dividir($n1,$n2)
	{
		if($n2==0){
			return false;
        }else{
		}
		return $n1/$n2;
	}
	
}




?>