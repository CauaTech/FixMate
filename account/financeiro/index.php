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
<div class="financeiro">
	<div class="container">
		<div class="card-financa">
			<div class="row">
				<div class="col-md-4">
					<div class="card financa-card">
						<div class="card-body">
							<div class="card-widgets">
								<div class="row">
									<div class="col-md-6">
										<i class="fa-solid fa-cash-register widgets-icon"></i>
									</div>
									<div class="col-md-6">
										<div class="widgets-name">
											Ganho Mensal
										</div>
										<div class="widgets-info">
											R$ : 2500.00
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card financa-card">
						<div class="card-body">
							<div class="card-widgets">
								<div class="row">
									<div class="col-md-6">
										<i class="fa-solid fa-cash-register widgets-icon"></i>
									</div>
									<div class="col-md-6">
										<div class="widgets-name">
											Gasto mensal
										</div>
										<div class="widgets-info">
											R$ : 150.00
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card financa-card">
						<div class="card-body">
							<div class="card-widgets">
								<div class="row">
									<div class="col-md-6">
										<i class="fa-solid fa-cash-register widgets-icon"></i>
									</div>
									<div class="col-md-6">
										<div class="widgets-name">
											Produtos Vendidos
										</div>
										<div class="widgets-info">
											150
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="financa-table">
			<div class="row">
				<div class="col-md-6">
					<div class="fix-responsive fix-margin">
						<h6>Tabela De Vendas</h6>  <button class="btn btn-venda" data-bs-toggle="modal" data-bs-target="#venda" title="Adicionar Venda">Adicionar Venda</button>
						<table id="example" class="table-phone" style="width:100%">
					        <thead class="fix-thead">
					            <tr>
					            	<th>Id</th>
					            	<th>Produto Vendido</th>
					                <th>Tipo</th>
					                <th>Vendedor</th>
					                <th>Preço</th>
					                <th>Pagamento</th>
					            </tr>
					        </thead>
					        <tbody>
					        	<tr>
					        		<td>1</td>
					                <td>Pelicula</td>
					                <td>Proteção</td>
					                <td>Cleber</td>
					                <td>R$ 50,00</td>
					                <td>Dinheiro</td>
					            </tr>
					        </tbody>
					    </table>
					</div>
				</div>
				<div class="col-md-6">
					<div class="fix-responsive fix-margin">
						<h6>Tabela De Gastos</h6> <button class="btn btn-venda" data-bs-toggle="modal" data-bs-target="#gasto" title="Adicionar Gasto">Adicionar Venda</button>
						<table id="example2" class="table-phone" style="width:100%">
					        <thead class="fix-thead">
					            <tr>
					            	<th>Id</th>
					            	<th>Compra</th>
					                <th>Tipo</th>
					                <th>Vendedor</th>
					                <th>Preço</th>
					                <th>Fornecedor</th>
					            </tr>
					        </thead>
					        <tbody>
					        	<tr>
					        		<td>1</td>
					                <td>Pelicula</td>
					                <td>Proteção</td>
					                <td>Peças de celular 2000</td>
					                <td>R$ 50,00</td>
					                <td>Feirinha</td>
					            </tr>
					            <tr>
					        		<td>1</td>
					                <td>Pelicula</td>
					                <td>Proteção</td>
					                <td>Peças de celular 2000</td>
					                <td>R$ 50,00</td>
					                <td>Feirinha</td>
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

<?php include($flow.'assents/app/modals/venda-modal.php'); ?>
<?php include($flow.'assents/app/modals/gasto-modal.php'); ?>

<script type="text/javascript">
	new DataTable('#example', {
		searching: false,
	    info: false,
	    ordering: false,
	    paging: false
	});
</script>

<script type="text/javascript">
	new DataTable('#example2', {
		searching: false,
	    info: false,
	    ordering: false,
	    paging: false
	});
</script>

</body>
</html>