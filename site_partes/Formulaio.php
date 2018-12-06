<article class="container">
		<div class="row">
			<section class="col-6">
				<br>
				<h2 id="Cadastar">Cadastre-se</h2>
				<form action="#" method="post" autocomplete="off">
					<div class="col-12">
						<label>Nome:</label>
						<input type="text" name="nome" class="form-control" placeholder="Digite seu nome aqui" required="on">
					</div>

					<div class="col-12">
						<label>Telefone:</label>
						<input type="tel" name="telefone" class="form-control" placeholder="Digite seu telefone aqui" required="on" maxlength="10">
					</div>

					<div class="col-12">
						<label>Email:</label>
						<input type="email" name="email" class="form-control" placeholder="Digite seu email aqui" required="on">
					</div>
					<br>
					<input type="submit" name="enviar" value="Receba mais Informações>>" class="btn btn-md btn-info">

				</form>
			</section>
			<section class="col-6">
				<?php

	 $controler = new Controller();
	 $controler->Valida_campo();
	 $controler->gravarCliente();
 ?>
			</section>
		</div>
	</article>
