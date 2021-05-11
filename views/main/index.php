
    <main class="container-md mt-4">
        <table class="table border shadow align-middle">
            <thead class="table-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Proveedor</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($productos as $producto){?>
             
                <tr>
                    <td> <?php echo $producto->nombre_producto; ?></td>
                    <td><?php echo $producto->proveedor; ?></td>
                    <td> <?php echo $producto->descripcion; ?> </td>
                    <td><?php echo $producto->precio; ?></td>
                    <td><?php echo $producto->stock; ?></td>
                    <td>
                        <button type="button" class="btn btn-primary">Editar</button>
                        <button type="button" class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
             <?php }// ?>
                
            </tbody>
        </table>
    </main>

    