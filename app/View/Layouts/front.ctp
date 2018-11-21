<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<meta name="format-detection" content="telephone=no">
	<meta charset="UTF-8">

	<title>Tienda</title>

	<link rel="icon" type="image/png" href="/img/front/favicon-01.png" sizes="64x64">
	<!-- Include external files and scripts here (See HTML helper for more info.) -->
	<?php echo $this->fetch('meta'); ?>

	<!-- BS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
	 crossorigin="anonymous">

	<?php $this->Html->css('styles', array('inline' => false)); ?>
	<?php echo $this->fetch('css'); ?>

	<!--iconos fontawesome-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
	 crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700" rel="stylesheet">

	<!--carrousel-->
	<link rel="stylesheet" href="js/owlcarousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="js/owlcarousel/assets/owl.theme.default.min.css">

</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light sticky-top azul">
		<a class="navbar-brand" href="/">MARCO</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
		 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="/">Home
						<span class="sr-only">(current)</span>
					</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
					 aria-haspopup="true" aria-expanded="false">
						Catalogo
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item hombre" href="/hombre">Ropa para Hombre</a>
						<a class="dropdown-item mujer" href="/mujer">Ropa para Mujer</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#footer">Contacto</a>
				</li>
			</ul>
			<div class="pr-3">
				<button class="btn btn-default my-2 my-sm-0" type="submit"><i class="fas fa-shopping-cart"></i></button>
			</div>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Buscar.." aria-label="Search">
				<button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>
	</nav>

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-2">

				<h1 class="my-4">Menu</h1>
				<div class="list-group">
					<a href="/hombre" class="list-group-item hombre">Ropa Hombre</a>
					<a href="/mujer" class="list-group-item">Ropa Mujer</a>
				</div>

				<div class="py-5">
					<p>Lo mejor en ropa para hombre de todo Mexico</p>
				</div>

			</div>

			<div class="col-lg-10">
				<?php echo $this->fetch('content'); ?>
			</div>
		</div>
	</div>


	<footer id="footer" class="azul pt-4">

		<div class="container-fluid text-center text-md-left">
			<!-- Copyright -->
			<div class="footer-copyright text-center py-3">
				<h4>Lorem, ipsum.</h4>
			</div>
			<!-- Copyright -->

	</footer>
	</div>

	<!-- BS JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	 crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
	 crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
	 crossorigin="anonymous"></script>
	<script src="js/owlcarousel/owl.carousel.min.js"></script>
	<script src="js/carousel.js"></script>
	<script src="js/random.js"></script>
	<?php echo $this->fetch('script'); ?>
</body>

</html>
