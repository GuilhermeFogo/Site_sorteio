<?php 

class Conexao
{
	private $conexao;
	
	public function getCon_mysql()
	{
		$senha ="123456";
		$usu_db ="root";
		$url = "mysql:dbname=testedb;host=127.0.0.1'";
		try {
			$conn = new PDO($url,$usu_db,$senha);
		
		return $this->conexao = $conn;

		} catch (Exception $e) {
			echo "<h2>Erro Fatal</h2>";
		}
	}

	public function getCon_oracle()
	{
		try {
			$senha ="123";
			$usu_db ="testephp";
			$url = "oci:dbname=xe;host=localhost";

			//$conn = oci_connect($usu_db, $senha,$url);
			$conn = new PDO($url,$usu_db,$senha);
			echo "<h1>Erro Fatal</h2>";
			return $this->conexao = $conn;
		} catch (Exception $e) {
			
		}
	}


}
 ?>