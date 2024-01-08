<?php 
$int = 2;
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
	<title>Login</title>
	<meta name="language" content="pt-BR">
	<meta name="description" content="">
	
	<meta name="robots" content="all">
	<meta name="author" content="Vortex Agency">

	<?php include($flow.'assents/app/head.php');?>
</head>

<!--Importando Css-->
<?php include($flow.'assents/css/style_global.php'); ?>

<body class="bg-login">

<!--Ativar/Desligar Load-->
<?php #include($flow.'assents/app/load.php'); ?>

<!--Ativar Navbar Editar-->
<?php #include($flow.'assents/app/navbar.php'); ?>

<!-- Body -->

<div class="fix-login">
	<div class="container">
		<div class="card card-login">
			<div class="card-body">
				<div class="title-card">
					<i class="fi fi-tr-mobile-button"></i> Entrar
				</div>
				<div class="subtitle-card">
					Entre para Transformar a Jornada de sua loja
				</div>
				<hr>	
				<div class="input-card">
					<label class="input-text">Usuario</label>
					<input type="text" class="form-control form-login" name="">
				</div>
				<div class="input-card">
					<label class="input-text">Password</label>
					<input type="password" class="form-control form-login" name="">
				</div>
				<div class="input-card">
					<button class="btn btn-login">Entrar</button>
				</div>
				<hr>
				<center>
					<a class="link-login" href="#">Voltar para Pagina Inicial ></a>
				</center>
			</div>
		</div>
	</div>
</div>

<!-- Finalizar/Body -->

<!--Ativar Footer Editar-->
<?php #include($flow.'assents/app/footer.php'); ?>

<!--Import Cookie Enable-->
<?php include($flow.'assents/app/cookie.php'); ?>


</body>
</html>