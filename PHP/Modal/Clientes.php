<?php 
class Cliente
{
	private $nome;
	private $telefone;
	private $email;
	

	public function getNome()
	{
		return $this->$nome;
	}
	

	public function getEmail()
	{
		return $this->$email;
	}


	public function getTelefone()
	{
		return $this->$telefone;
	}


	public function setNome($nomes)
	{
		$this->$nome = $nomes;
		return $this->$nome;
	}


	public function setEmail($emails)
	{
		$this->$email = $emails;
		return $this->$email;
	}


	public function setTelefone($telefones)
	{
		$this->$telefone = $telefones;
		return $this->$telefone;
	}
}
 ?>