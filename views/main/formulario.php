<fieldset>
    <legend class="mb-4">Agregar un producto</legend>
    <div class="mb-3">
        <label for="nombre_producto" class="form-label">Nombre del producto:</label>
        <input type="text" class="form-control" id="nombre_producto" name="nombre_producto" value="<?php echo $producto->nombre_producto ?>">
    </div>
    <div class="row g-3 mb-3">
        <div class="col-sm-7">
            <label for="proveedor" class="form-label">Proveedor:</label>
            <input type="text" class="form-control" id="proveedor" name="proveedor" value="<?php echo $producto->proveedor ?>" aria-label="">
        </div>
        <div class="col-sm">
            <label for="precio" class="form-label">Precio:</label>
            <input type="text" class="form-control" id="precio" name="precio" value="<?php echo $producto->precio ?>" aria-label="">
        </div>
        <div class="col-sm">
            <label for="stock" class="form-label">Stock:</label>
            <input type="number" class="form-control" id="stock" name="stock" value="<?php echo $producto->stock ?>" aria-label="">
        </div>
    </div>

    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción:</label>
        <textarea class="form-control" id="descripcion" name="descripcion" rows="3"><?php echo $producto->descripcion ?></textarea>
    </div>
</fieldset>
