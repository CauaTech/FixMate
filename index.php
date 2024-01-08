<?php 
$int = 0;
if ($int == 0) {
	$flow = "./";
}elseif ($int == 1) {
	$flow = "../";
}elseif ($int == 2) {
	$flow = "../../";
}elseif ($int == 3) {
	$flow = "../../../";
}elseif ($int == 4) {
	$flow = "../../../../";
}elseif ($int == 5) {
	$flow = "../../../../../";
}elseif ($int == 6) {
	$flow = "../../../../../../";
}
?>

<!DOCTYPE html>
<html>

<!--HEAD COMPLETO-->
<head>
	<title>Homepage - FixMate</title>
	<meta name="language" content="pt-BR">
	<meta name="description" content="">
	
	<meta name="robots" content="all">
	<meta name="author" content="Vortex Agency">

	<?php include($flow.'assents/app/head.php');?>
</head>

<!--Importando Css-->
<?php include($flow.'assents/css/style_global.php'); ?>

<body>

<!--Ativar/Desligar Load-->
<?php #include($flow.'assents/app/load.php'); ?>

<!--Ativar Navbar Editar-->
<?php include($flow.'assents/app/navbar.php'); ?>

<!-- Body -->
<div class="fixhome-header">
	<div class="container">
		<div class="fix-header">
			<div class="row">
				<div class="col-md-6">
					<div class="fixheader-img">
						<img width="100%" src="<?php echo $flow ?>assents/img/girl.png">
					</div>
				</div>
				<div class="col-md-6">
					<div class="fixheader-captacao">
						<div class="captacao-text">
							Aumente a Eficiencia da Sua Loja: Sistema integrado para <br> orçamento, reparos e acompanhamentos de <br> dispositivos
						</div>
						<div class="captacao-input">
							<input type="text" name="loja" class="form-control form-captacao" placeholder="Nome da Loja">
							<input type="text" name="loja" class="form-control form-captacao" placeholder="Email">
							<input type="text" name="loja" class="form-control form-captacao" placeholder="Telefone">
						</div>
						<div class="captacao-subtitle">
							Lembre de preencher todos os campos
						</div>
						<div class="captacao-button">
							<button type="button" class="btn btn-captacao">Entrar em Contato</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="fix-parceiros">
	<div class="container">
		<div class="fix-parceiros">
			<center>
				<div class="loja-title">
					Lojas Parceiras
				</div>
			</center>
			<div class="row">
				<div class="col-md-4">
					<div class="card fix-parceiros-card">
						<div class="card-body  fix-parceiros-cardbody">
							<div class="card img-parceiro">
								<div class="card-body">
									<img width="100%" src="<?php echo $flow ?>assents/img/girl.png">
								</div>
							</div>
							<center>
								<div class="parceiro-name">
									Loja Parceira
								</div>
								<div class="parceiro-info">
									Colocar as informaçoes do parceiro aqui
								</div>
							</center>							
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card fix-parceiros-card">
						<div class="card-body  fix-parceiros-cardbody">
							<div class="card img-parceiro">
								<div class="card-body">
									<img width="100%" src="<?php echo $flow ?>assents/img/girl.png">
								</div>
							</div>
							<center>
								<div class="parceiro-name">
									Loja Parceira
								</div>
								<div class="parceiro-info">
									Colocar as informaçoes do parceiro aqui
								</div>
							</center>							
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card fix-parceiros-card">
						<div class="card-body  fix-parceiros-cardbody">
							<div class="card img-parceiro">
								<div class="card-body">
									<img width="100%" src="<?php echo $flow ?>assents/img/girl.png">
								</div>
							</div>
							<center>
								<div class="parceiro-name">
									Loja Parceira
								</div>
								<div class="parceiro-info">
									Colocar as informaçoes do parceiro aqui
								</div>
							</center>							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="fix-second-cap">
	<div class="container">
		<center>
			<div class="secondcap-title">
				Aumente a Eficiencia da Sua Loja: Sistema integrado para <br> orçamento, reparos e acompanhamentos de <br> dispositivos
			</div>
			<div class="secondcap-form">
				<input class="form-control form-cap-input" type="text" name="loja" placeholder="Nome da Loja">
				<input class="form-control form-cap-input" type="text" name="loja" placeholder="Email">
				<input class="form-control form-cap-input" type="text" name="loja" placeholder="Telefone">
			</div>
			<div class="cap-button">
				<button type="button" class="btn btn-cap">Cadastrar Agora</button>
			</div>
		</center>
	</div>
</div>
<!-- Finalizar/Body -->

<!--Ativar Footer Editar-->
<?php include($flow.'assents/app/footer.php'); ?>

<!--Import Cookie Enable-->
<?php include($flow.'assents/app/cookie.php'); ?>


</body>
</html>