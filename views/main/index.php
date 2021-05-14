
    <main class="container-md mt-4">
        <?php echo $mensaje ? $mensaje : ''; ?>
        <table class="table border shadow align-middle" style="table-layout: fixed;">
            <thead class="table-dark text-center">
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
                    <td class="text-wrap" style="word-wrap:break-word"> <?php echo $producto->descripcion; ?> </td>
                    <td class="text-center"><?php echo $producto->precio; ?></td>
                    <td class="text-center"><?php echo $producto->stock; ?></td>
                    <td>
                        <a href="<?php echo URL . 'editar?producto='. $producto->id; ?>" type="button" class="btn btn-primary">Editar</a>
                        <form style="display:inline;" action="<?php echo URL; ?>eliminar" method="post">
                            <input type="hidden" name="id" value="<?php echo $producto->id ?>">
                            <input type="hidden" name="tipo" value="producto">
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                        
                    </td>
                </tr>
             <?php }// ?>
                
            </tbody>
        </table>
    </main>

    