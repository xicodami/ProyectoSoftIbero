<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="row">
                <div class="container-fluid">
                    <h1 class="mt-4">Consultar Categorias</h1>
                    <a type="submit" href="?c=Categorias&a=registrarCategorias" class="btn bg-secondary text-dark">Atrás</a>
                    <hr>
                    <div class="table-responsive">
                        <table id="example" class="display nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Id Categoria</th>
                                    <th>Nombre Categoria</th>
                                    <th>Nombre Administrador</th>
                                    <th>ACTUALIZAR</th>
                                    <th>ELIMINAR</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($categorias as $categoria) : ?>
                                    <tr class="text-center">
                                        <td>
                                            <?php echo $categoria->getid_categoria(); ?>
                                        </td>

                                        <td>
                                            <?php echo $categoria->getname_categoria(); ?>
                                        </td>
                                        <td>
                                            <?php echo $categoria->getusuario_codigo(); ?>
                                        </td>
                                        <td>
                                            <a href="?c=Categorias&a=actualizarCategorias&id_categoria=<?php echo $categoria->getid_categoria() ?>" class="btn btn-success">
                                                <i class="fas fa-sync-alt"></i>
                                            </a>

                                        </td>
                                        <td>
                                            <a href="?c=Categorias&a=consultarCategoria&param=4&id_categoria=<?php echo $categoria->getid_categoria() ?>" class="btn btn-warning">
                                                <i class="far fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Id Categoria</th>
                                    <th>Nombre Categoria</th>
                                    <th>Nombre Administrador</th>
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