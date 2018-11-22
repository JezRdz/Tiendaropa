<div class="container py-5">
	<a href="/admin/productos"><button class="btn-lg btn-outline-secondary"><i class="fas fa-undo"></i></button></a>
	<div class="text-center">
		<h1>Agregar Producto Nuevo</h1>
	</div>
	<?php echo $this->Form->create('Product', array('type' => 'file')); ?>
	
	<div class="container">
			<div class="row py-2">		

						<div class="col text-center mx-auto">
							<div class="card">
								<img id="img-1" src="/<?php echo $product['Image']['path'].$product['Image']['name']; ?>" alt="" class="card-img-top img-principal img-border-principal">
								<div class="card-body input-agregar-div-main">
									<p class="card-text text-center">IMAGEN PRINCIPAL</p>
									<label for="Imagen1" class="input-titulo">Agregar imagen..</label>
									<input type="file" id="Imagen1" numero="1" class="input-imagen " name="data[Product][imagen1]">
								</div>
							</div>
						</div>					
				

				<div class="col text-center">
					<div class="card">
						<img id="img-2" src="/<?php echo $product['Image2']['path'].$product['Image2']['name']; ?>" alt="" class="card-img-top img-principal img-border">
						<div class="card-body input-agregar-div">
							<p class="card-text text-center">IMAGEN 2</p>
							<label for="Imagen2" class="input-titulo">Agregar imagen..</label>
							<input type="file" id="Imagen2" numero="2" class="input-imagen" name="data[Product][imagen2]">
						</div>
					</div>
				</div>

				<div class="col text-center">
					<div class="card">
						<img id="img-3" src="/<?php echo $product['Image3']['path'].$product['Image3']['name']; ?>" alt="" class="card-img-top img-principal img-border">
						<div class="card-body input-agregar-div">
							<p class="card-text text-center">IMAGEN 3</p>
							<label for="Imagen3" class="input-titulo">Agregar imagen..</label>
							<input type="file" id="Imagen3" numero="3" class="input-imagen" name="data[Product][imagen3]">
						</div>
					</div>				
					</div>

					</div>				
					
<div class="row">
		
			<div class="container text-center">
				<h3>Datos del producto</h3>
				<div class="add-productform">
					<div class="form-row">
						<div class="form-group">
							<div class="row">
								<?php echo $this->Form->input('name', array(
								'label' => 'Nombre',
								'class' => 'form-control required',
								'div' => 'py-2 col-6'
							));

							echo $this->Form->input('category_id', array(
								'label' => 'Categoria',
								'class' => 'custom-select box',
								'empty' => 'Seleccionar Categoria..',
								'div' => 'col-6 py-2',
							));

							echo $this->Form->input('brand', array(
								'label' => 'Marca',
								'class' => 'form-control required',
								'div' => 'py-2 col-6'
							));

							echo $this->Form->input('price', array(
								'label' => 'Precio',
								'class' => 'form-control required',
								'div' => 'py-2 col-6'
							));

							echo $this->Form->input('description', array(
								'label' => 'Descripcion',
								'type' => 'textarea',
								'class' => 'form-control required',
								'div' => 'py-2 col-12'
							));

							$status = array('1' => 'Activo', '0' => 'Inactivo');
							echo $this->Form->input('status', array(
								'label' => 'Estado: ',
								'div' => 'py-2 col-6',
								'options' => $status, 'default' => '1'
							));

							?>
							</div>
						</div>
						<?php
					echo $this->Form->input('id', array('type' => 'hidden')); ?>
					</div>
					<div class="text-center">
						<?php echo $this->Form->button('Guardar', array(
						'type' => 'submit',
						'class' => 'btn-lg btn-outline-primary'
					)); ?>
						<?php echo $this->Form->end(); ?>
					</div>
				</div>
			</div>
	
	</div>

</div>

<?php $this->Html->script('agregar_producto', array('inline' => false)); ?>
