            <div class="text-center py-5">
                <h1>VER ARTICULO</h1>
            </div>

            <div class="container-fluid pb-5">

                <div class="row">
                    
                    <div class="col-lg-6 col-md-12">
                        <div class="carousel-articulo owl-carousel pb-5">
                        <div><img class="card-img-top ver-producto" src="/<?php echo $product['Image']['path'] . $product['Image']['name']; ?>" alt=""></div>
                        <div><img class="card-img-top ver-producto" src="/<?php echo $product['Image2']['path'] . $product['Image2']['name']; ?>" alt=""></div>
                        <div><img class="card-img-top ver-producto" src="/<?php echo $product['Image3']['path'] . $product['Image3']['name']; ?>" alt=""></div>
                    </div>
                     </div>
                    
                    <div class="col-lg-6 col-md-12">
                        <h2><strong>Precio:</strong> $<?php echo $product['Product']['price'] ?> MXN</h2>
<h2><strong>Producto:</strong> <?php echo $product['Product']['name'] ?></h2>
<h2><strong>Marca:</strong> <?php echo $product['Product']['brand'] ?></h2>
<h2><strong>Categoria:</strong> <?php echo $product['Category']['name'] ?></h2>


<div>
<div class="card">
  <div class="card-body">
    <p><?php echo $product['Product']['description']; ?></p>
  </div>
</div>
</div>
<div class="" style="padding-top:50px;">
<button class="btn btn-primary"><i class="fas fa-shopping-cart pr-2"></i>Proceder a la compra</button>
</div>
                    </div>
                </div>

            </div>
            <!-- /.row -->
            