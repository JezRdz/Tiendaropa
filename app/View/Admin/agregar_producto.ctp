<div class="container py-5">
	<a href="" class="btn btn-secondary">Cancelar</a>
	<div class="text-center">
		<h1>Agregar Producto Nuevo</h1>
	</div>
	<?php echo $this->Form->create('Product'); ?>
	<div class="row">
		<div class="col-6">
			<div class="container">
				<div class="py-2 text-center">
					<h3>Imagenes</h3>
				</div>
				<div class="row">
					<div style="margin:auto">
						<div class="card">
							<img class="card-img-top" src="../img/placeholder.png" alt="Card image cap">
							<div class="card-body">
								<p class="card-text text-center">IMAGEN PRINCIPAL</p>
								<div class="input-group mb-3">
									<div class="custom-file">
										<input type="file" class="custom-file-input" id="inputGroupFile02">
										<label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02"></label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row py-2">
					<div class="col">
						<div class="card">
							<img class="card-img-top" src="../img/placeholder.png" alt="Card image cap">
							<div class="card-body">
								<p class="card-text text-center">IMAGEN 1</p>
								<div class="input-group mb-3">
									<div class="custom-file">
										<input type="file" class="custom-file-input" id="inputGroupFile02">
										<label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02"></label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card">
							<img class="card-img-top" src="../img/placeholder.png" alt="Card image cap">
							<div class="card-body">
								<p class="card-text text-center">IMAGEN 2</p>
								<div class="input-group mb-3">
									<div class="custom-file">
										<input type="file" class="custom-file-input" id="inputGroupFile02">
										<label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02"></label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-6">
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

                $status = array('1' => 'Activo', '0' => 'Inactivo');
                echo $this->Form->input('status', array(
                    'label' => 'Estado: ',
                    'div' => 'py-2 col-6',
                    'options' => $status, 'default' => '1'
                ));
                
                ?>
							</div>
						</div>
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

</div>
