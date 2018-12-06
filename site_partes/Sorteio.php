<article class="container">
	 	<div class="row">
	 		<section class="col-12">
	 			<form action="#" method="post">
	 				<legend>Sorteio:</legend>
	 				<div class="col-6">
	 					<label>Quantidade de pessoas:</label>
	 					<input type="number" name="pessoas" placeholder="Quantas pessoas participarão?" class="form-control" required="on">
	 				</div>
	 				<br>
	 				<div class="col-6">
	 					<input type="submit" name="sorteia" class="btn btn-md btn-second" value="Participantes" id="numero_participantes">
	 				</div>
	 			</form>
	 		</section>
	 			<?php 
	 				include 'PHP\Controler\controller.php';

	 				$controle = new Controller();
	 				$controle->sorteio();
	 			 ?>
	 	</div>
	 </article>

	 <!-- <br>
	 <article class="container">
	 	<div class="row">
	 		<section class="col-6">
	 			<p>Bloco:</p>
	 			<form action="#" method="post" autocomplete="off">
	 				<div class="col-6">
	 					<input type="text" name="sorteio_nome" placeholder="Digite o nome para o sorteio" class="form-control">
	 				</div>
	 				<br>
	 				<div class="col-6">
	 					<input type="text" name="sorteio_email" placeholder="Digite o email para o sorteio" class="form-control">
	 				</div>
	 			</form>
	 		</section>
	 	</div>
	 </article> -->