<div class="container">
	<div class="text-center">
		<h1>Lista de Productos</h1>
		<div class="container py-5">
			<a href="/admin/agregar_producto" class="btn btn-warning">Agregar Producto Nuevo</a>
		</div>
	</div>
	<table class="table text-center">
		<thead class="thead-dark">
			<tr>
				<th scope="col">#</th>
				<th scope="col"></th>
				<th scope="col">Nombre</th>
				<th scope="col">Categoria</th>
				<th scope="col">Marca</th>
				<th scope="col">Precio</th>
				<th scope="col">Acciones</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($products as $product): ?>
			<tr>
				<th scope="row">1</th>
				<td><img src="../ropa/hombre/1.jpg" class="rounded-circle productos-img" alt=""></td>
				<td>
					<?php echo $product['Product']['name'] ?>
				</td>
				<td>
					<?php echo $product['Category']['name'] ?>
				</td>
				<td>
					<?php echo $product['Product']['brand'] ?>
				</td>
				<td>$
					<?php echo $product['Product']['price'] ?>
				</td>
                <td>
                <a href="/admin/editar_producto/<?php echo $product['Product']['id']; ?>"><button class="btn-lg btn-outline-primary">Editar</button></a>
                <a href="/Admin/eliminar_producto/<?php echo $product['Product']['id']; ?>" onclick="return confirm('¿Estas seguro?')"><button class="btn-lg btn-outline-danger">Eliminar</button></a>
            </td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

</div>
