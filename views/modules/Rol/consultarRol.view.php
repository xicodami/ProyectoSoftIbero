<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="row">
                <div class="container-fluid">
                    <h1 class="mt-4">Consultar Roles</h1>
                    <a type="submit" href="?c=Roles&a=RegistrarRoles" class="btn bg-secondary text-dark">Atrás</a>
                    <hr>
                    <div class="table-responsive">
                        <table id="example" class="display nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    
                                    <th>NOMBRE ROL</th>
                                    <th>NOMBRE ADMINISTRADOR</th>
                                    <th>APELLIDO ADMINISTRADOR</th>
                                    <th>ACTUALIZAR</th>
                                    <th>ELIMINAR</th>
                                </tr>

                            </thead>
                            <tbody>
                                <?php foreach ($roles as $rol) : ?>
                                    <tr class="text-center">
                                        
                                        <td><?php echo $rol->getRolName(); ?></td>
                                        <td><?php echo $rol->getuserName(); ?></td>
                                        <td><?php echo $rol->getuserLastName(); ?></td>
                                        
                                        <td>
                                            <a href="?c=Roles&a=actualizarRoles&codigoRol=<?php echo $rol->getRolCode() ?>" class="btn btn-success">
                                                <i class="fas fa-sync-alt"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="?c=Roles&a=consultarRoles&param=4&codigoRol=<?php echo $rol->getRolCode() ?>" class="btn btn-warning">
                                                <i class="far fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>

                            <tfoot>
                                <tr>
                                    
                                    <th>NOMBRE ROL</th>
                                    <th>NOMBRE ADMINISTRADOR</th>
                                    <th>APELLIDO ADMINISTRADOR</th>
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
