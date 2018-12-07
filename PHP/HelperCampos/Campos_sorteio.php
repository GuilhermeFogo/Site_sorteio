<?php 

class Campos_sorteio 
{
	private $array_nome;
	private $array_email;
	private $indices;
	function __construct($indice)
	{
		$this->$indices = $indice;
		$this->$array_nome = array($_POST['sorteio_nome'.$indice]);
		$this->$array_email = array($_POST['sorteio_email'.$indice]);

	}

	public function Sortear_tudo()
	{
		$numero_randomico= random_int(0, 50);
		$numero_randomico =$numero_randomico * pi();

		$arrayName = array($this->$array_nome,$this->$array_emails);
		foreach ($arrayName as $variable) {
			echo $variable. " ". $numero_randomico;
		}
	}

}



 ?>