<a href="/usuarios"><button class="btn-lg btn-outline-secondary"><i class="fas fa-undo"></i></button></a>

<div class="container py-5">
	<div class="text-center">
		<h1>Agregar Usuario Nuevo</h1>
	</div>
	<div class="">

		<div class="container text-center">
			<h3>Datos del usuario</h3>
			<!-- <div class="user-img">
<div class="card">
    <img class="card-img-top" src="../img/placeholder.png" alt="Card image cap">
    <div class="card-body">
        <p class="card-text text-center">IMAGEN DE PERFIL</p>
        <div class="input-group mb-3">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile02">
                <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02"></label>
            </div>
        </div>
    </div>
</div>
                        </div> -->
			<div class="add-productform" style="width: 50%; margin: auto;">
				<?php echo $this->Form->create('User'); ?>
				<div class="form-row">
					<div class="form-group">
						<div class="row">
							<?php echo $this->Form->input('name', array(
            'label' => 'Nombre',
            'class' => 'form-control required',
            'div' => 'py-2 col-6'
        ));
        echo $this->Form->input('lastname', array(
            'label' => 'Apellidos',
            'class' => 'form-control required',
            'div' => 'py-2 col-6'
        ));

        echo $this->Form->input('username', array(
            'label' => 'Username',
            'class' => 'form-control required',
            'div' => 'py-2 col-6'
        ));

        echo $this->Form->input('password', array(
            'label' => 'Password',
            'class' => 'form-control required',
            'div' => 'py-2 col-6'
        ));

        echo $this->Form->input('role', array(
            'label' => 'Rol: ',
            'div' => 'py-2 col-6',
            'options' => array(
                'admin' => 'Admin',
                'cliente' => 'Cliente'
            )
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
			</div>
			<div class="text-center pt-5">
				<?php echo $this->Form->button('Guardar', array(
        'type' => 'submit',
        'class' => 'btn-lg btn-outline-primary'
    )); ?>
				<?php echo $this->Form->end(); ?>
			</div>
		</div>
	</div>


</div>
