<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Registrar Salida Producto</h1><br>
            <a type="submit" href="?c=Inventarios&a=Inventario" class="btn bg-secondary text-dark">Atrás</a>
            <a type="submit" href="?c=SalidaProductos&a=consultarSalidaProductoContr&param=2" class="btn bg-primary text-white">Lista de Salidas de Productos</a>
            <hr>
            <div class="row">
                <form action="" method="POST" class="me-0 me-md-3 my-2 my-md-0">
                    <div class="card-group">
                        <div class="card">
                            <div class="form-group">
                                <label for="rol" class="p-1"><b>Cantidad del Producto:</b></label>
                                <input type="text" class="form-control" placeholder="Escriba la cantidad" name="cantidad_sali_prod_KG" title="Por favor ingrese solo letras y números se aceptan con caracteres especiales" required style="text-transform: uppercase;">
                            </div>&nbsp;
                            <div class="form-group">
                                <label for="rol" class="p-1"><b>Nombre Categoria:</b></label>
                                <select class="form-control" name="id_categoria" required>
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
                                <label for="rol" class="p-1"><b>Seleccione el Iva:</b></label>
                                <select class="form-control" name="IvaIncluido" required>
                                    <option value="" selected="" disabled="">Seleccione IvaIncluido</option>
                                    <option value="0%">0%</option>
                                    <option value="5%">5%</option>
                                    <option value="16%">16%</option>
                                    <option value="19%">19%</option>
                                </select>
                            </div>&nbsp;
                        </div>
                        <div class="card">
                            <div class="form-group">
                                <label for="rol" class="p-1"><b>Marca:</b></label>
                                <input type="text" class="form-control" placeholder="Escriba la Marca" name="marca" title="Por favor ingrese solo letras y números se aceptan con caracteres especiales" required style="text-transform: uppercase;">
                            </div>&nbsp;
                            <div class="form-group">
                                <label for="rol" class="p-1"><b>Referencia:</b></label>
                                <input type="text" class="form-control" placeholder="Escriba la referencia" name="referencia" required style="text-transform: uppercase;">
                            </div>&nbsp;
                            <div class="form-group">
                                <label for="rol" class="p-1"><b>Número de Factura:</b></label>
                                <input type="text" class="form-control" placeholder="Escriba el número de factura" name="numerofactura" title="Por favor ingrese solo letras y números se aceptan con caracteres especiales" required style="text-transform: uppercase;">
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
                        </div>
                        <div class="card">
                            <div class="form-group">
                                <label for="rol" class="p-1"><b>Nit (sin puntos):</b></label>
                                <input type="number" pattern="[0-9]" class="form-control" placeholder="Escriba el nit" name="nit" title="Por favor ingrese solo números" required style="text-transform: uppercase;">
                            </div>&nbsp;
                            <div class="form-group">
                                <label for="rol" class="p-1"><b>Fecha Factura Real:</b></label>
                                <input type="date" class="form-control" placeholder="Escriba la Fecha De la Factura Real" name="fechafacturareal" required style="text-transform: uppercase;">
                            </div>&nbsp;
                            <div class="form-group">
                                <label for="rol" class="p-1"><b>Precio Compra:</b></label>
                                <input type="text" class="form-control" placeholder="Escriba el precio de compra" name="PrecioCompra" required style="text-transform: uppercase;">
                            </div>&nbsp; 
                            <div class="form-group">
                                <label for="rol" class="p-1"><b>Confirme Cédula Administrador:</b></label>
                                <input type="text" class="form-control" placeholder="confirme la cédula administrador" name="usuario_codigo" required style="text-transform: uppercase;">
                            </div>&nbsp;
                            <div class="centrar">
                                <input class="btn btn-success" type="submit" value="Registrar Salida Producto">&nbsp;

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>