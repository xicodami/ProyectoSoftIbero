<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="row">
                <div class="container-fluid">
                    <h1 class="mt-4">Consultar Productos</h1>
                    <a type="submit" href="?c=Productos&a=registrarProductos" class="btn bg-secondary text-dark">Atrás</a>
                    <hr>
                    <div class="table-responsive">
                        <table id="example" class="display nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Id Producto</th>
                                    <th>Nombre Producto</th>
                                    <th>Nombre Categoria</th>
                                    <th>Nombre Usuario</th>
                                    <th>ACTUALIZAR</th>
                                    <th>ELIMINAR</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($producto as $producto) : ?>
                                    <tr class="text-center">
                                        <td>
                                            <?php echo $producto->getid_producto(); ?>
                                        </td>
                                        <td>
                                            <?php echo $producto->getname_producto(); ?>
                                        </td> 
                                        <td>
                                            <?php echo $producto->getid_categoria(); ?>
                                        </td>
                                        <td>
                                            <?php echo $producto->getusuario_nombre(); ?>
                                        </td>
                                        <td>
                                            <a href="?c=Productos&a=actualizarProductos&id_producto=<?php echo $producto->getid_producto() ?>" class="btn btn-success">
                                                <i class="fas fa-sync-alt"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="?c=Productos&a=consultarProducto&param=4&id_producto=<?php echo $producto->getid_producto() ?>" class="btn btn-warning">
                                                <i class="far fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Id Producto</th>
                                    <th>Nombre Producto</th>
                                    <th>Nombre Categoria</th>
                                    <th>Nombre Usuario</th>
                                    <th>ACTUALIZAR</th>
                                    <th>ELIMINAR</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </main>