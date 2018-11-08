<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<meta name="format-detection" content="telephone=no">
	<meta charset="UTF-8">

	<title>Helplace</title>

	<link rel="icon" type="image/png" href="/img/front/favicon-01.png" sizes="64x64">
	<!-- Include external files and scripts here (See HTML helper for more info.) -->
	<?php echo $this->fetch('meta'); ?>

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

	<div class="loader-full">
		<div class="loader-gif">
			<img src="img/iconos/loadercel.gif" alt="">
		</div>
	</div>

	<nav class="navbar navbar-expand-lg navbar-dark azul-proyecto sticky-top">
    <!-- Image and text -->

  <a class="navbar-brand d-lg-none" href="/" style="color: white;">
    <img src="img/iconos/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Helplace
  </a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
		 aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link home-link" href="/">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link plaza-link" href="/plazas">Plazas comerciales</a>
				</li>
			<!-- 	
				<li class="nav-item">
					<a class="nav-link solicitar-link" href="#">Solicitar una plaza</a>
				</li> -->

			</ul>
		</div>
	</nav>

	<div class="logo-container text-center d-none d-lg-block">
		<img src="img/iconos/logo.png" alt="" class="logo">
		<span>Helplace</span>
	</div>

	<?php echo $this->fetch('content'); ?>

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
