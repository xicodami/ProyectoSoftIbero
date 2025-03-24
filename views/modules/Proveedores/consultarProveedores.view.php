<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="row">
                <div class="container-fluid">
                    <h1 class="mt-4">Consultar Proveedores</h1>
                    <a type="submit" href="?c=Proveedores&a=RegistrarProveedorControllers" class="btn bg-secondary text-dark">Atrás</a>
                    <hr>
                    <div class="table-responsive">
                        <table id="example" class="display nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID PROVEEDOR</th>
                                    <th>NOMBRE CATEGORIA</th>
                                    <th>NIT</th>
                                    <th>NOMBRE PROVEEDOR</th>
                                    <th>REPRESENTANTE LEGAL</th>
                                    <th>CELULAR</th>
                                    <th>DIRECCIÓN</th>
                                    <th>EMAIL</th>
                                    <th>ACTUALIZAR</th>
                                    <th>ELIMINAR</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!--proveedores = sale del controlador y proveedores = sale del model-->
                                <?php foreach ($proveedores as $proveedores) : ?>
                                    <tr class="text-center">
                                        <td>
                                            <?php echo $proveedores->getid_proveedor(); ?>
                                        </td>
                                        <td>
                                            <?php echo $proveedores->getid_categoria(); ?>
                                        </td>
                                        <td>
                                            <?php echo $proveedores->getnit(); ?>
                                        </td>
                                        <td>
                                            <?php echo $proveedores->getname_proveedor(); ?>
                                        </td>
                                        <td>
                                            <?php echo $proveedores->getrepresentante(); ?>
                                        </td>
                                        
                                        <td>
                                            <?php echo $proveedores->getcelular(); ?>
                                        </td>
                                        
                                        <td>
                                            <?php echo $proveedores->getubicacion(); ?>
                                        </td>
                                        <td>
                                            <?php echo $proveedores->getemail(); ?>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-success">
                                                <i class="fas fa-sync-alt"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-warning">
                                                <i class="far fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                <th>ID PROVEEDOR</th>
                                    <th>NOMBRE CATEGORIA</th>
                                    <th>NIT</th>
                                    <th>NOMBRE PROVEEDOR</th>
                                    <th>REPRESENTANTE LEGAL</th>
                                    <th>CELULAR</th>
                                    <th>DIRECCIÓN</th>
                                    <th>EMAIL</th>
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