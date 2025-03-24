<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Registrar Producto</h1>
            <a type="submit" href="?c=Inventarios&a=Inventario" class="btn bg-secondary text-dark">Atrás</a>
            <div class="row">
                <form action="" method="POST" class="me-0 me-md-3 my-2 my-md-0">
                    <div class="form-group">
                        <label for="rol" class="p-1"><b>Nombre Producto:</b></label>
                        <input type="text" class="form-control" placeholder="Nombre Producto" name="name_productos"  pattern="[a-zA-Z\s\-áéíóúÁÉÍÓÚñÑüÜ]+[^\d]+" title="Por favor ingrese solo letras se aceptan con caracteres especiales" required style="text-transform: uppercase;">
                    </div>&nbsp;
                    <div class="form-group">
                        <label for="rol" class="p-1"><b>Nombre Categoria:</b></label>
                        <select class="form-control" name="id_categoria" required>
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
                    <div class="centrar">
                        <input class="btn btn-success" type="submit" value="Registrar Producto">&nbsp;
                        <a type="submit" href="?c=Productos&a=consultarProducto&param=2" class="btn bg-primary text-white">Lista de Productos</a>
                    </div>
                </form>
            </div>
        </div>
    </main>