<?php 

class Campos_sorteio 
{
	private $nomes;
	private $emails;
	private $indice;
	function __construct($indices)
	{

		$this->$nomes =$_POST['sorteio_nome'.$indices];
		$this->$emails =$_POST['sorteio_email'.$indices];
		$this->$indice =$indices;

	}

	public function Sortear_tudo()
	{
		if ($this->$indice<=0||$this->$indice==1) {
			echo "ERRO";
		}else{

			for ($i=0; $i <$this->$indice ; $i++) { 
				echo "<br>";
				echo $this->$indice;
			}//for

		}
	}

}



 ?>