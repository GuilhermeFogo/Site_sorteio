<?php 

class Controller
{
	private $helper;
	function __construct()
	{
		$this->$helper = new HelperCampos();
	}


	public function Valida_campo()
	{
		// capturando os campos
		$nome = $this->$helper->getCampo_nome();
		$tel = $this->$helper->getCampo_tel();
		$email = $this->$helper->getCampo_email();
		
		// verificação
		if (empty($nome) || empty($email) || empty($tel)) {
			// vazio
		}else{
			if (strlen($tel)<=5 || strlen($tel)<=0 || strlen($tel)==0) {
			
			// echo "<div class='container'>
			// 	<p class ='erro'>Senha muito curta</p>
			// </div>";
		}else{
			if (strlen($tel)>=6) {
			// 	echo "<div class='container'>
			// 	<p class ='sucesso'>Senha OK</p>
			// </div>";
			}
		}
		}
		// echo $nome;
		// echo "<br>";
		// echo $tel;
		// echo "<br>";
		// echo $email;

		$crud = new Crud_cliente();

		try {
			
		$cliente = new Cliente();
		$cliente->setNome($nome);
		echo "<br>";
		
		echo "<br>";
		echo $cliente->getNome();

		$cliente->setTelefone($tel);
		echo "<br>";
		echo $cliente->getTelefone();
		$cliente->setEmail($email);
		echo "<br>";
		echo $cliente->getEmail();

		$crud->AddCliente($cliente);
		
		} catch (Exception $e) {
			echo "ERRO";
		}
	}

	public function gravarCliente()
	{
		$crud = new Crud_cliente();
		$nome = $this->$helper->getCampo_nome();
		$tel = $this->$helper->getCampo_tel();
		$email = $this->$helper->getCampo_email();

		try {
			
		$cliente = new Cliente();
		$cliente->setNome($nome);
		echo "<br>";
		
		echo "<br>";
		echo $cliente->getNome();

		$cliente->setTelefone($tel);
		echo "<br>";
		echo $cliente->getTelefone();
		$cliente->setEmail($email);
		echo "<br>";
		echo $cliente->getEmail();

		$crud->AddCliente($cliente);
		} catch (Exception $e) {
			echo "ERRO";
		}
	}

// echo "<section class="col-6">
// 	 			<p>Bloco:</p>
// 	 			<form action="#" method="post" autocomplete="off">
// 	 				<div class="col-6">
// 	 					<input type="text" name="sorteio_nome" placeholder="Digite o nome para o sorteio" class="form-control">
// 	 				</div>
// 	 				<br>
// 	 				<div class="col-6">
// 	 					<input type="text" name="sorteio_email" placeholder="Digite o email para o sorteio" class="form-control">
// 	 				</div>
// 	 			</form>
// 	 		</section>";
	public function sorteio()
	{
		$quantidade =$this->$helper->getCampo_sorteio();
		
		if (empty($quantidade)) {
			# code...
		}else{
			if ($quantidade==1 || $quantidade<-1|| $quantidade>=30) {
			echo "<div class='container'>
				<p class ='erro'>Tente Novamente</p>
			</div>";
		}else{

			for ($i=0; $i < $quantidade ; $i++) { 
			echo "<section class='col-6'>";
			echo "<p>Participante: ".$i."</p>";
			echo "<form action='#' method='post' autocomplete='off'>";
			echo "<div class='col-6'>";
			echo "<input type='text' name='sorteio_nome".$i."' placeholder='Nome para sorteio' class='form-control'>";
			echo "</div>";
			echo "<br>";
			echo "<div class='col-6'>";
			echo "<input type='text' name='sorteio_email".$i."' placeholder='Email para sorteio' class='form-control'>";
			echo "</div>";
			echo "</form>";
			echo "</section>";
		}
		echo "<input type='submit' name='sorteia' value='Sorteio' class='btn btn-md btn-info'
		id='btn_sorteio'>";

		}// ultimo else
		}// primeiro else

	}
}


 ?>