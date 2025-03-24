<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Registrar Proveedor</h1>
            <a type="submit" href="?c=Inventarios&a=Inventario" class="btn bg-secondary text-dark">Atrás</a>
            <a type="submit" href="?c=Proveedores&a=ConsultarProveedoresControllers&param=2" class="btn bg-primary text-white">Lista Proveedores</a>
            <hr>
            <div class="row">
                <form action="" method="POST" class="me-0 me-md-3 my-2 my-md-0">
                    <div class="card-group">
                        <div class="card">
                            <div class="form-group">
                                <label for="rol" class="p-1"><b>Nombre Proveedor:</b></label>
                                <input type="double" class="form-control" placeholder="Nombre Proveedor" name="name_proveedor" pattern="[a-zA-Z& ]+" title="Por favor ingrese solo letras sin caracteres especiales" required style="text-transform: uppercase;">
                            </div>&nbsp;
                            <div class="form-group">
                                <label for="rol" class="p-1"><b>Celular:</b></label>
                                <input type="number" class="form-control" placeholder="Escriba su celular" name="celular" title="Por favor ingrese solo números " required style="text-transform: uppercase;">
                            </div>&nbsp;
                            <div class="form-group">
                                <label for="rol" class="p-1"><b>Dirección Empresa:</b></label>
                                <input type="text" class="form-control" pattern="[a-zA-Z#0-9 -]+" placeholder="Escriba su dirección" name="ubicacion" title="Por favor ingrese solo letras y numeros " required style="text-transform: uppercase;">
                            </div>&nbsp;
                            <div class="centrar">
                                <input class="btn btn-success" type="submit" value="Registrar Proveedor">&nbsp;

                            </div>
                        </div>
                        <div class="card">
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
                                <label for="rol" class="p-1"><b>Email:</b></label>
                                <input type="email" class="form-control" placeholder="Escriba su Email" name="emailproveedor" title="Por favor ingrese solo letras y numeros " required style="text-transform: uppercase;">
                            </div>&nbsp;
                        </div>
                        <div class="card">
                            <div class="form-group">
                                <label for="rol" class="p-1"><b>Nit (sin puntos):</b></label>
                                <input type="number" pattern="[0-9]" class="form-control" placeholder="Escriba el Nit" name="nit" title="Por favor ingrese solo números " required style="text-transform: uppercase;">
                            </div>&nbsp;
                            <div class="form-group">
                                <label for="rol" class="p-1"><b>Nombre Representante Legal:</b></label>
                                <input type="text" class="form-control" placeholder="Nombre Representante Legal" name="name_representante" title="Por favor ingrese solo letras " required style="text-transform: uppercase;">
                            </div>&nbsp;
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>