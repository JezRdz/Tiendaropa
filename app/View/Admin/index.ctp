
        <div class="container">
            <div class="text-center py-3">
                <h1>
                    Bienvenido <strong>USER</strong>                    
                </h1>
            </div>

            <div class="row">
                <div class="col-12">
<div class="card">
    <div class="text-center py-4">
        <h5>Productos</h5>
    </div>
    <div class="card-body">
<table class="table table-hover text-center">
    <thead class="thead-dark">
        <tr>
           <th scope="col">#</th>
				<th scope="col"></th>
				<th scope="col">Nombre</th>
				<th scope="col">Categoria</th>
				<th scope="col">Marca</th>
				<th scope="col">Precio</th>				
        </tr>
    </thead>
    <tbody>
       <?php foreach ($products as $product) : ?>
			<tr>
				<th scope="row"><?php echo $product['Product']['id'] ?></th>
				<td><img src="/<?php echo $product['Image']['path'] . $product['Image']['name']; ?>" class="rounded-circle productos-img" alt=""></td>
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
			</tr>
			<?php endforeach; ?>
    </tbody>
</table>
    </div>
</div>
                </div>
            <div class="col-12">
<div class="card">
    <div class="text-center py-4">
        <h5>Usuarios</h5>
    </div>
    <div class="card-body">
<table class="table text-center table-hover">
    <thead class="">
        <tr>
            <th scope="col">#</th>			
			<th scope="col">Username</th>
			<th scope="col">Nombre</th>
			<th scope="col">Rol</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user) : ?>
			<tr>
				<th scope="row">
					<?php echo $user['User']['id'] ?>
				</th>				
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
			</tr>
			<?php endforeach; ?>
    </tbody>
</table>
    </div>
</div>
            </div>
            </div>
            
        </div>
