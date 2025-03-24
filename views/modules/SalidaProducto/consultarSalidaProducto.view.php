<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="row">
                <div class="container-fluid">
                    <h1 class="mt-4">Consultar Salidas de los Productos</h1>
                    <a type="submit" href="?c=SalidaProductos&a=registrarSalidaProductos" class="btn bg-secondary text-dark">Atrás</a>
                    <hr>
                    <div class="table-responsive">
                        <table id="example" class="display nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID SALIDA </th>
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
                                <!--salidaProducto = sale del controlador y Salidaproducto = sale del model-->
                                <?php foreach ($salidaProducto as $Salidaproducto) { ?>
                                    <tr class="text-center">
                                        <td><?php echo $Salidaproducto->getid_salida_prod(); ?></td>
                                        <td><?php echo $Salidaproducto->getcantidad_sali_prod_KG(); ?></td>
                                        <td><?php echo $Salidaproducto->getid_producto(); ?></td>
                                        <td><?php echo $Salidaproducto->getid_categoria(); ?></td>
                                        <td><?php echo $Salidaproducto->getfecha(); ?></td>
                                        <td><?php echo $Salidaproducto->getmarca(); ?></td>
                                        <td><?php echo $Salidaproducto->getnumerofactura(); ?></td>
                                        <td><?php echo $Salidaproducto->getid_proveedor(); ?></td>
                                        <td><?php echo $Salidaproducto->getnit(); ?></td>
                                        <td><?php echo $Salidaproducto->getfechafacturareal(); ?></td>
                                        <td><?php echo $Salidaproducto->getreferencia(); ?></td>
                                        <td><?php echo $Salidaproducto->getPrecioCompra(); ?></td>
                                        <td><?php echo $Salidaproducto->getIvaIncluido(); ?></td>
                                        <td><?php echo $Salidaproducto->getValorIva(); ?></td>
                                        <td><?php echo $Salidaproducto->getTotal(); ?></td>
                                        <td><?php echo $Salidaproducto->getusuario_codigo(); ?></td>
                                        <td>
                                            <a href="?c=SalidaProductos&a=actualizarSalidaProducto&id_salida_prod=<?php echo $Salidaproducto->getid_salida_prod(); ?>" class="btn btn-success">
                                                <i class="fas fa-sync-alt"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="?c=SalidaProductos&a=consultarSalidaProductoContr&param=4&id_salida_prod=<?php echo $Salidaproducto->getid_salida_prod(); ?>" class="btn btn-warning">
                                                <i class="far fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ID SALIDA </th>
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