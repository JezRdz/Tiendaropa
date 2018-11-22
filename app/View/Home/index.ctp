<div class="text-center py-5">
	<h1>TODA LA ROPA</h1>
</div>
<div class="carousel-seccion owl-carousel pb-5">
	<?php foreach ($products as $product) : ?>
    <a href="/articulo/<?php echo $product['Product']['id']; ?>">
	<div> <img src="/<?php echo $product['Image']['path'] . $product['Image']['name']; ?>" alt="" class="carousel-images"></div>
    </a>
	<?php endforeach; ?>
</div>


<div class="row">

<?php foreach ($products as $product) : ?>
	<div class="col-lg-3 col-md-6 mb-4">
		<div class="card h-100">
			<a href="/articulo/<?php echo $product['Product']['id']; ?>"><img class="card-img-top producto" src="/<?php echo $product['Image']['path'] . $product['Image']['name']; ?>" alt=""></a>
			<div class="card-body">
			<h4 class="card-title">
				<a href="/articulo/<?php echo $product['Product']['id']; ?>"><?php echo $product['Product']['name']; ?></a>
			</h4>
			<h5>$<?php echo $product['Product']['price']; ?> MXN</h5>
			<p class="card-text"><?php echo $product['Product']['description']; ?></p>
		</div>
		<div class="card-footer">
			<small class="text-muted">Marca: <?php echo $product['Product']['brand']; ?></small>
		</div>
        </div>
	</div>
<?php endforeach; ?>

</div>
