<div class="vortex-navbar">
	<nav class="navbar navbar-expand-sm navbar-light">
	  <div class="container">

	    <a class="navbar-brand" href="<?php echo $flow ?>"><img width="40px" src="<?php echo $flow ?>assents/img/logo/logo.png"></a>

	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
	      <span class="navbar-toggler-icon"></span>
	    </button>

	    <div class="collapse navbar-collapse justify-content-end" id="nav">
	    	<ul class="navbar-nav">
				<a href="<?php echo $flow ?>" class="item_nav">Dashboard</a>
		    	<a href="<?php echo $flow ?>" class="item_nav">Orçamento</a>
		    	<a href="<?php echo $flow ?>" class="item_nav">Estoque</a>
		    	<a href="<?php echo $flow ?>" class="item_nav">Financeiro</a>
		    	<a href="<?php echo $flow ?>" class="item_nav btn btn-vortex">
		    		<i class="fa-regular fa-user"></i>
		    		JpCell
		    	</a>
	    	</ul>
	    </div>
	  </div>
	</nav>
</div>

<style type="text/css">
	.vortex-navbar{
		background-color: #fff;
	}
	.item_nav{
		display: block;
  		padding: 0.5rem 1rem;
		text-decoration: none;
		color: black;
		font-size: 13px;
	}
	.item_nav:hover{
		transition: 300ms;
		text-decoration: none;
		color: #c2c2c2;
	}
	.btn-vortex{
		background-color: #00B9FF;
		color: #fff;
	}
</style>