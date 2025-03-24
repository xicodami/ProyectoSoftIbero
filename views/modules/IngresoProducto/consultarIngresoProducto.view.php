<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="row">
                <div class="container-fluid">
                    <h1 class="mt-4">Consultar Ingresos Productos</h1>
                    <a type="submit" href="?c=IngresoProductos&a=registrarIngresoProductos" class="btn bg-secondary text-dark">Atrás</a>
                    <hr>
                    <div class="table-responsive">
                        <table id="example" class="display nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Id Ingreso </th>
                                    <th>CANTIDAD KG</th>
                                    <th>NOMBRE PRODUCTO</th>
                                    <th>NOMBRE CATEGORIA</th>
                                    <th>AÑO/MES/DÍA - HORA</th>
                                    <th>MARCA</th>
                                    <th>NÚMERO DE FACTURA</th>
                                    <th>PROVEEDOR</th>
                                    <th>NIT</th>
                                    <th>FECHA FACTURA PROVEEDOR</th>
                                    <th>REFERENCIA</th>
                                    <th>PRECIO COMPRA</th>
                                    <th>IVA APLICADO %</th>
                                    <th>VALOR IVA</th>
                                    <th>TOTAL</th>
                                    <th>NOMBRE ADMINISTRADOR</th>
                                    <th>ACTUALIZAR</th>
                                    <th>ELIMINAR</th>
                                </tr>
                            </thead>

                            <tbody>
                                <!-- IngresoProductos = sale del controlador y Ingproducto = sale del modelo -->
                                <?php foreach ($IngresoProductos as $Ingproducto) : ?>
                                    <tr class="text-center">
                                        <td>
                                            <?php echo $Ingproducto->getid_ingr_produc(); ?>
                                        </td>
                                        <td>
                                            <?php echo $Ingproducto->getid_producto(); ?>
                                        </td>
                                        <td>
                                            <?php echo $Ingproducto->getid_categoria(); ?>
                                        </td>
                                        <td>
                                            <?php echo $Ingproducto->getcantidad_ingr_produc_KG(); ?>
                                        </td>

                                        <td>
                                            <?php echo $Ingproducto->getfecha_Ingreso(); ?>
                                        </td>
                                        <td>
                                            <?php echo $Ingproducto->getmarca(); ?>
                                        </td>
                                        <td>
                                            <?php echo $Ingproducto->getnumerofactura(); ?>
                                        </td>
                                        <td>
                                            <?php echo $Ingproducto->getid_proveedor(); ?>
                                        </td>
                                        <td>
                                            <?php echo $Ingproducto->getnit(); ?>
                                        </td>
                                        <td>
                                            <?php echo $Ingproducto->getfechafacturareal(); ?>
                                        </td>
                                        <td>
                                            <?php echo $Ingproducto->getreferencia(); ?>
                                        </td>
                                        <td>
                                            <?php echo $Ingproducto->getPrecioCompra(); ?>
                                        </td>
                                        <td>
                                            <?php echo $Ingproducto->getIvaIncluido(); ?>
                                        </td>
                                        <td>
                                            <?php echo $Ingproducto->getValorIva(); ?>
                                        </td>
                                        <td>
                                            <?php echo $Ingproducto->getTotal(); ?>
                                        </td>
                                        <td>
                                            <?php echo $Ingproducto->getusuario_codigo(); ?>
                                        </td>
                                        
                                        <td>
                                            <a href="?c=IngresoProductos&a=actualizarIngresoProducto&id_ingr_produc=<?php echo $Ingproducto->getid_ingr_produc() ?>" class="btn btn-success">
                                                <i class="fas fa-sync-alt"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="?c=IngresoProductos&a=consultarIngresoProductoContr&param=4&id_ingr_produc=<?php echo $Ingproducto->getid_ingr_produc() ?>" class="btn btn-warning">
                                                <i class="far fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Id Ingreso </th>
                                    <th>CANTIDAD KG</th>
                                    <th>NOMBRE PRODUCTO</th>
                                    <th>NOMBRE CATEGORIA</th>
                                    <th>AÑO/MES/DÍA - HORA</th>
                                    <th>MARCA</th>
                                    <th>NÚMERO DE FACTURA</th>
                                    <th>PROVEEDOR</th>
                                    <th>NIT</th>
                                    <th>FECHA FACTURA PROVEEDOR</th>
                                    <th>REFERENCIA</th>
                                    <th>PRECIO COMPRA</th>
                                    <th>IVA APLICADO %</th>
                                    <th>VALOR IVA</th>
                                    <th>TOTAL</th>
                                    <th>NOMBRE ADMINISTRADOR</th>
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