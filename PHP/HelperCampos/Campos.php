<?php 

class HelperCampos
{
	private $campo_nome;
	private $campo_tel;
	private $campo_email;
	private $sorteio;

	function __construct()
	{
		$this->$campo_tel = $_POST['telefone'];
		$this->campo_nome = $_POST['nome'];
	 	$this->campo_email = $_POST['email'];
	 	$this->sorteio = $_POST['pessoas'];
	}

	public function getCampo_nome()
	{
		return $this->campo_nome;	
	}
	public function getCampo_tel()
	{
		return $this->$campo_tel;
	}
	public function getCampo_email()
	{
		return $this->campo_email;
	}

	public function getCampo_sorteio()
	{
		return $this->sorteio;;	
	}

}
 ?>