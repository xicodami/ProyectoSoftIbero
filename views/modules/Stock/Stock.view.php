<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="row">
                <div class="container-fluid">
                    <h1 class="mt-4">STOCK PRODUCTOS</h1>
                    <a type="submit" href="?c=Inventarios&a=Inventario" class="btn bg-secondary text-dark">Atrás</a>
                    <hr>
                    <div class="table-responsive">
                        <table id="example" class="display nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID PRODUCTO</th>
                                    <th>NOMBRE PRODUCTO</th>
                                    <th>NOMBRE CATEGORIA</th>
                                    <th>STOCK</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- stocks = sale del controlador y stock = sale del modelo -->
                                <?php foreach ($stocks as $stock) : ?>
                                    <tr class="text-center">
                                        <td>
                                            <?php echo $stock->getid_producto(); ?>
                                        </td>
                                        <td>
                                            <?php echo $stock->getname_producto(); ?>
                                        </td>
                                        <td>
                                            <?php echo $stock->getname_categoria(); ?>
                                        </td>
                                        <td>
                                            <?php echo $stock->getstock(); ?>
                                        </td>


                                    </tr>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ID PRODUCTO</th>
                                    <th>NOMBRE PRODUCTO</th>
                                    <th>NOMBRE CATEGORIA</th>
                                    <th>STOCK</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </main>