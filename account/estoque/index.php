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
<div class="estoque">
	<div class="container">
		<div class="estoque-add">
			<button class="btn btn-estoque" data-bs-toggle="modal" data-bs-target="#product">Adicionar Produto</button>
		</div>
		<div class="estoque-table">
			<div class="row">
				<div class="col-md-12">
					<div class="fix-responsive fix-margin">
						<table id="example" class="table-phone" style="width:100%">
					        <thead class="fix-thead">
					            <tr>
					            	<th>Id</th>
					            	<th>Produto</th>
					                <th>Tipo</th>
					                <th>Fornecedor</th>
					                <th>Preço</th>
					                <th>Gerenciar</th>
					            </tr>
					        </thead>
					        <tbody>
					        	<tr>
					        		<td>1</td>
					                <td>Pelicula</td>
					                <td>Proteção</td>
					                <td>Peças de celular 2000</td>
					                <td>R$ 50,00</td>
					                <td>
					                	<button class="btn btn-retirar" data-bs-toggle="tooltip" title="Retirar Produto"><i class="fa-solid fa-right-from-bracket"></i></button>
					                </td>
					            </tr>
					            <tr>
					        		<td>1</td>
					                <td>Pelicula</td>
					                <td>Proteção</td>
					                <td>Peças de celular 2000</td>
					                <td>R$ 50,00</td>
					                <td>
					                	<button class="btn btn-retirar" data-bs-toggle="tooltip" title="Retirar Produto"><i class="fa-solid fa-right-from-bracket"></i></button>
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

<?php include($flow.'assents/app/modals/product-modal.php'); ?>

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