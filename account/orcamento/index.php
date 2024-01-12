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
	<title>JpCell - Orçamanetos</title>
	<meta name="language" content="pt-BR">
	<meta name="description" content="">
	
	<meta name="robots" content="all">
	<meta name="author" content="Vortex Agency">

	<?php include($flow.'assents/app/head.php');?>
</head>

<!--Importando Css-->
<?php include($flow.'assents/css/style_global.php'); ?>

<body class="bg-dashboard">

<!--Ativar/Desligar Load-->
<?php #include($flow.'assents/app/load.php'); ?>

<!--Ativar Navbar Editar-->
<?php include($flow.'assents/app/navbar-dashboard.php'); ?>

<!-- Body -->
<div class="orcamento">
	<div class="container">
		<div class="orcamento-card">
			<div class="row">
				<div class="col-md-4">
					<div class="card card-orcamento">
						<div class="card-body">
							<div class="row">
								<div class="col-md-6">
									<div class="card-widgets">
										<i class="fa-solid fa-mobile-screen-button widgets-icon"></i>
									</div>
								</div>
								<div class="col-md-6">
									<div class="widgets-name">
										Reparos Pendentes :
									</div>
									<div class="widgets-info">
										25
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card card-orcamento">
						<div class="card-body">
							<div class="row">
								<div class="col-md-6">
									<div class="card-widgets">
										<i class="fa-solid fa-receipt widgets-icon"></i>
									</div>
								</div>
								<div class="col-md-6">
									<div class="widgets-name">
										Orçamentos Feitos 
									</div>
									<div class="widgets-info">
										4
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card card-orcamento">
						<div class="card-body">
							<div class="row">
								<div class="col-md-6">
									<div class="card-widgets">
										<i class="fa-solid fa-mobile-screen-button widgets-icon"></i>
									</div>
								</div>
								<div class="col-md-6">
									<div class="widgets-name">
										Celulares Entregues
									</div>
									<div class="widgets-info">
										9
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="orcamento-table">
			<div class="row">
				<div class="col-md-12">
					<div class="fix-responsive fix-margin">
						<table id="example" class="table-phone" style="width:100%">
					        <thead class="fix-thead">
					            <tr>
					                <th>Codigo</th>
					                <th>Cliente</th>
					                <th>Aparelho</th>
					                <th>Valor</th>
					                <th>Status</th>
					                <th>Gerenciar</th>
					            </tr>
					        </thead>
					        <tbody>
					        	<tr>
					                <td><span class="badge fix-codigo">#43242</span></td>
					                <td>Cauã Dias</td>
					                <td><span class="badge fix-phone">Iphone 4</span></td>
					                <td>R$ 300,00</td>
					                <td><span class="badge fix-status">Pronto</span></td>
					                <td>
					                	<button class="btn btn-sm btn-whats" data-bs-toggle="tooltip" title="Avisar no Whatsapp"><i class="fi fi-brands-whatsapp"></i></button>
					                	<button class="btn btn-sm btn-lixeira" data-bs-toggle="tooltip" title="Excluir"><i class="fi fi-tr-trash-xmark"></i></button>
					                	<button class="btn btn-sm btn-entrega" data-bs-toggle="tooltip" title="Entregue"><i class="fi fi-ts-truck-moving"></i></button>
					                </td>
					            </tr>
					        </tbody>
					    </table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Finalizar/Body -->

<!--Ativar Footer Editar-->
<?php #include($flow.'assents/app/footer.php'); ?>

<!--Import Cookie Enable-->
<?php include($flow.'assents/app/cookie.php'); ?>


<script type="text/javascript">
	new DataTable('#example', {
		searching: false,
	    info: false,
	    ordering: false,
	    paging: false
	});
</script>

</body>
</html>