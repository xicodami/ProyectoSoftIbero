<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Actualizar Ingreso del Producto</h1>
            <a type="submit" href="?c=IngresoProductos&a=consultarIngresoProductoContr&param=2" class="btn bg-secondary text-dark">Atrás</a>
            <div class="row">
                <form action="" method="POST" class="me-0 me-md-3 my-2 my-md-0">
                    <div class="card-group">
                        <div class="card">

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="rol" class="p-1"><b>Cantidad del Producto en KG:</b></label>
                                    <input type="number" class="form-control" placeholder="Escriba la cantidad" name="cantidad_producto" value="<?php echo $ingresoproducto->getcantidad_ingr_produc_KG() ?>" required title="Ingrese solo números">
                                </div>&nbsp;
                                <div class="form-group">
                                    <label for="rol" class="p-1"><b>Marca:</b></label>
                                    <input type="text" class="form-control" placeholder="Escriba la Marca" name="marca" title="Ingrese solo letras" required style="text-transform: uppercase;" value="<?php echo $ingresoproducto->getmarca(); ?>">
                                </div>&nbsp;
                                <div class="form-group">
                                    <label for="rol" class="p-1"><b>Nit:&nbsp;(sin puntos)</b></label>
                                    <input type="number" pattern="[0-9]" class="form-control" placeholder="Escriba el nit" name="nit" title="Ingrese solo números" required style="text-transform: uppercase;" value="<?php echo $ingresoproducto->getnit(); ?>">
                                </div>&nbsp;
                                <div class="form-group">
                                    <label for="rol" class="p-1"><b>Precio Compra:</b></label>
                                    <input type="text" class="form-control" placeholder="Escriba el precio de compra" title="Ingrese solo números" name="PrecioCompra" required style="text-transform: uppercase;" value="<?php echo $ingresoproducto->getPrecioCompra(); ?>">
                                </div>&nbsp;
                                <div class="form-group">
                                    <label for="rol" class="p-1"><b>Total:</b></label>
                                    <input type="text" class="form-control" placeholder="Total" name="Total" title="Ingrese solo números" required style="text-transform: uppercase;" value="<?php echo $ingresoproducto->getTotal(); ?>">
                                </div>&nbsp;
                            </div>

                        </div>


                        <div class="card">

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="rol" class="p-1"><b>Nombre Categoria:</b></label>
                                    <select class="form-control" name="id_categoria" required title="Ingrese solo letras">
                                        <option value="" selected="" disabled="">Seleccione Categoria</option>
                                        <?php
                                        $categorias = new Categoria();
                                        $categorias = $categorias->consultarCategorias();
                                        foreach ($categorias as $categoria) {
                                        ?>
                                            <option value="<?php echo $categoria->getid_categoria(); ?>"><?php echo $categoria->getname_categoria(); ?></option>
                                        <?php } ?>
                                    </select>
                                </div>&nbsp;
                                <div class="form-group">
                                    <label for="rol" class="p-1"><b>Número de Factura:</b></label>
                                    <input type="text" class="form-control" placeholder="Escriba el número de factura" name="numerofactura" title="Ingrese solo números " required style="text-transform: uppercase;" value="<?php echo $ingresoproducto->getnumerofactura(); ?>">
                                </div>&nbsp;
                                <div class="form-group">
                                    <label for="rol" class="p-1"><b>Fecha Factura:</b></label>
                                    <input type="date" class="form-control" placeholder="Escriba la Fecha De la Factura Real" name="fechafacturareal" title="Seleccione Fecha" required style="text-transform: uppercase;" value="<?php echo $ingresoproducto->getfechafacturareal(); ?>">
                                </div>&nbsp;
                                <div class="form-group">
                                    <label for="rol" class="p-1"><b>Seleccione el Iva:</b></label>
                                    <select class="form-control" name="IvaIncluido" required>
                                        <option value="" selected="" disabled="">Seleccione IvaIncluido</option>
                                        <option value="0%">0%</option>
                                        <option value="5%">5%</option>
                                        <option value="16%">16%</option>
                                        <option value="19%">19%</option>
                                    </select>
                                </div>&nbsp;
                                <div class="form-group">
                                    <label for="rol" class="p-1"><b>Cédula Administrador:&nbsp;(sin puntos)</b></label>
                                    <input type="text" class="form-control" placeholder="Cédula Administrador" title="Ingrese solo números" name="usuario_codigo" required style="text-transform: uppercase;" value="<?php echo $ingresoproducto->getusuario_codigo(); ?>">
                                </div>&nbsp;
                            </div>

                        </div>



                        <div class="card">

                            <div class="card-body">
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
                                <div class="form-group">
                                    <label for="rol" class="p-1"><b>Proveedor:</b></label>
                                    <select class="form-control" name="id_proveedor" required>
                                        <option value="" selected="" disabled="">Seleccione Proveedor</option>
                                        <?php
                                        $proveedores = new Proveedor;
                                        $proveedores = $proveedores->ConsultarProveedoresModels();
                                        foreach ($proveedores as $proveedores) {
                                        ?>
                                            <option value="<?php echo $proveedores->getid_proveedor(); ?>"><?php echo $proveedores->getname_proveedor(); ?></option>
                                        <?php } ?>
                                    </select>
                                </div>&nbsp;
                                <div class="form-group">
                                    <label for="rol" class="p-1"><b>Referencia:</b></label>
                                    <input type="text" class="form-control" placeholder="Escriba la referencia" name="referencia" required title="Ingrese solo letras" style="text-transform: uppercase;" value="<?php echo $ingresoproducto->getreferencia(); ?>">
                                </div>&nbsp;
                                <div class="form-group">
                                    <label for="rol" class="p-1"><b>Valor Iva:</b></label>
                                    <input type="text" class="form-control" title="Ingrese solo números" placeholder="Valor del Iva" name="ValorIva" required style="text-transform: uppercase;" value="<?php echo $ingresoproducto->getValorIva(); ?>">
                                </div>&nbsp;
                                <div class="centrar">
                                <br><input class="btn btn-success" type="submit" value="Actualizar Ingreso Producto">&nbsp;
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="rol" class="p-1"></label>
                        <input type="hidden" class="form-control" placeholder="Escriba la cantidad" name="id_ingr_produc" required value="<?php echo $ingresoproducto->getid_ingr_produc(); ?>">
                    </div>&nbsp;
                    <div class="form-group">
                        <label for="rol" class="p-1"></label>
                        <input type="hidden" class="form-control" placeholder="Escriba la cantidad" name="fecha" value="<?php echo $ingresoproducto->getfecha_Ingreso(); ?>">
                    </div>&nbsp;
                </form>

            </div>
        </div>
    </main>