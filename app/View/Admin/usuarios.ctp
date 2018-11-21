<div class="container">
	<div class="text-center">
		<h1>Usuarios</h1>
		<div class="container py-5">
			<a href="/agregar_usuario" class="btn btn-warning">Agregar Usuario Nuevo</a>
		</div>
	</div>
	<table class="table text-center">
		<thead class="">
			<tr>
				<th scope="col">#</th>
				<th scope="col"></th>
				<th scope="col">Username</th>
				<th scope="col">Nombre</th>
				<th scope="col">Rol</th>
				<th scope="col">Acciones</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($users as $user): ?>
			<tr>
				<th scope="row">
					<?php echo $user['User']['id'] ?>
				</th>
				<td><img src="../img/admin.png" class="rounded-circle productos-img" alt=""></td>
				<td>
					<?php echo $user['User']['username'] ?>
				</td>
				<td>
					<?php echo $user['User']['name'] ?>
					<?php echo $user['User']['lastname'] ?>
				</td>
				<td>
					<?php echo $user['User']['role'] ?>
				</td>
				<td>
					<a href="/admin/editar_usuario/<?php echo $product['Product']['id']; ?>"><button href="/editar_producto" class="btn-lg btn-outline-primary">Editar</button></a>
					<a href="/admin/eliminar_usuario" onclick="return confirm('¿Estas seguro?')"><button href="" class="btn-lg btn-outline-danger">Eliminar</button></a>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>

<div class="text-center">
	<a href="/agregar_usuario" class="btn btn-warning">Agregar Usuario Nuevo</a>
</div>
