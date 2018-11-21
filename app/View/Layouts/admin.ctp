<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<meta name="format-detection" content="telephone=no">
	<meta charset="UTF-8">

	<title>Tienda</title>
	<?php
    echo $this->Html->css('styles');
    echo $this->fetch('meta');
    echo $this->fetch('css');

    ?>

	<link rel="icon" type="image/png" href="/img/front/favicon-01.png" sizes="64x64">
	<!-- Include external files and scripts here (See HTML helper for more info.) -->

	<!-- BS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
	 crossorigin="anonymous">
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

	<nav class="navbar navbar-dark bg-dark sticky-top">
		<a href="#menu-toggle" class="btn btn-outline-secondary" id="menu-toggle"><i class="fas fa-bars" style="color: white;"></i></a>
	</nav>

	<div id="wrapper">

		<!-- Sidebar -->
		<div id="sidebar-wrapper">
			<ul class="sidebar-nav">
				<li class="sidebar-brand">
					<a href="#">
						ADMIN TIENDA
					</a>
				</li>
				<li>
					<a href="/admin/productos">Productos</a>
				</li>
				<li>
					<a href="/admin/usuarios">Usuarios</a>
				</li>
				<li>
					<a href="/admin" class="btn btn-danger">Salir</a>
				</li>
			</ul>
		</div>
		<!-- /#sidebar-wrapper -->

		<!-- Page Content -->
		<div id="page-content-wrapper">
			<?php echo $this->fetch('content'); ?>
		</div>
		<!-- /#page-content-wrapper -->

	</div>


	<div id="footer">
	</div>
	</div>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDuUsluKXcIF2Hkqowx_sq2H38d8nUPOdc&callback=initMap">
	</script>

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

<?php $this->Html->css('styles', array('block' => true)); ?>
