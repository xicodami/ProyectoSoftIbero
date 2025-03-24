<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Actualizar Salida del Producto</h1>
            <a type="submit" href="?c=SalidaProductos&a=consultarSalidaProductoContr&param=2" class="btn bg-secondary text-dark">Atrás</a>

            <div class="row">
                <form action="" method="POST" class="me-0 me-md-3 my-2 my-md-0">
                    <div class="form-group">
                        <label for="rol" class="p-1"><b>Cantidad del Producto en KG:</b></label>
                        <input type="number" class="form-control" placeholder="Escriba la cantidad" name="cantidad_sali_prod_KG" value="<?php echo $salidaProducto->getcantidad_sali_prod_KG() ?>" >
                    </div>&nbsp;
                    <div class="form-group">
                        <label for="rol" class="p-1"><b>Nombre Categoria:</b></label>
                        <select class="form-control" name="id_categoria" required >
                            <option value="" selected="" disabled="">Seleccione Categoria</option>
                            <?php

                            $categorias = New Categoria();
                            $categorias = $categorias->consultarCategorias();
                            foreach ($categorias as $categoria) {
                            ?>
                                <option value="<?php echo $categoria->getid_categoria(); ?>"><?php echo $categoria->getname_categoria(); ?></option>
                            <?php } ?>
                        </select>
                    </div>&nbsp;
                    <div class="form-group">

                        <label for="rol" class="p-1"><b>Nombre Producto:</b></label>
                        <select class="form-control" name="id_producto" required>
                            <option value="" selected="" disabled="">Seleccione Producto</option>
                            <?php

                            $producto = new Producto;
                            $producto = $producto->consultarProductos();
                            foreach ($producto as $productos) {
                            ?>
                                <option value="<?php echo $productos->getid_producto(); ?>"><?php echo $productos->getname_producto(); ?></option>
                            <?php } ?>

                        </select>
                    </div>&nbsp;
                    <div class="centrar">
                        <input class="btn btn-success" type="submit" value="Actualizar Salida Producto">&nbsp;
                    </div>
                    <div class="form-group">
                        <label for="rol" class="p-1"></label>
                        <input type="hidden" class="form-control" placeholder="Escriba la cantidad" name="id_salida_prod" required value="<?php echo $salidaProducto->getid_salida_prod(); ?>">
                    </div>&nbsp;
                    <div class="form-group">
                        <label for="rol" class="p-1"></label>
                        <input type="hidden" class="form-control" placeholder="Escriba la cantidad" name="fecha" value="<?php echo $salidaProducto->getfecha_Salida(); ?>">
                    </div>&nbsp;
                </form>
            </div>
        </div>
    </main>
