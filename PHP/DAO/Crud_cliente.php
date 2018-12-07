<?php 
include 'Conxao.php';
class Crud_cliente
{
	private $conn;

	function __construct()
	{
		$this->conn = new Conexao();
		// $this->conn->getCo0_oracle();
	}

	public function AddCliente($nome,$telefone,$email)
	{
		try {
			$sql ="insert into Cliente(nome,telefone,email) values(?,?,?)";
			// arrumar o prepare
			$prepara = $this->conn->getCon_oracle()->prepare($sql);
			$prepara->bindParam(1, $nome);
			$prepara->bindParam(2, $telefone);
			$prepara->bindParam(3, $email);

			$prepara->execulte();
		} catch (Exception $e) {
			echo $e;
		}
	}

}

 ?>