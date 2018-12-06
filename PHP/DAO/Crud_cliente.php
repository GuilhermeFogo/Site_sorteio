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

	public function AddCliente(Cliente $cliente)
	{
		try {
			$sql ="insert into Cliente(nome,telefone,email) values(?,?,?)";
			// arrumar o prepare
			$prepara = $this->conn->getCon_oracle()->prepare($sql);
			// $prepara->bindParam(1, $cliente->getNome());
			// $prepara->bindParam(2, $cliente->geSenha());
			// $prepara->bindParam(3, $cliente->getEmail());

			//$prepara->execulte();
		} catch (Exception $e) {
			echo $e;
		}
	}

}

 ?>