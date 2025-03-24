<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="row">
                <div class="container-fluid">
                    <h1 class="mt-4">Consultar Usuarios</h1>
                    <a type="submit" href="?c=Users&a=registrarUsuarios" class="btn bg-secondary text-dark">Atrás</a>
                    <hr>
                    <div class="table-responsive">
                        <table id="example" class="display nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ROLE</th>
                                    <th>IDENTIFICATION CARD</th>
                                    <th>NAME</th>
                                    <th>LAST NAME</th>
                                    <th>E-MAIL</th>
                                    <th>STATE</th>
                                    <th>UPDATE</th>
                                    <th>DELETE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($users as $user) : ?>
                                    <tr class="text-center">
                                        <td>
                                            <?php echo $user->getRolCode(); ?>
                                        </td>
                                        <td>
                                            <?php echo $user->getUserCode(); ?>
                                        </td>
                                        <td>
                                            <?php echo $user->getUserName(); ?>
                                        </td>
                                        <td>
                                            <?php echo $user->getUserLastName(); ?>
                                        </td>
                                        <td>
                                            <?php echo $user->getUserEmail(); ?>
                                        </td>
                                        <td>
                                            <?php echo $user->getUserStatus(); ?>
                                        </td>
                                        <td>
                                            <a href="?c=Users&a=actualizarUsuarios&codigoUser=<?php echo $user->getUserCode() ?>" class="btn btn-success">
                                                <i class="fas fa-sync-alt"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="?c=Users&a=consultarUsuarios&param=4&codigoUser=<?php echo $user->getUserCode() ?>" class="btn btn-warning">
                                                <i class="far fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ROLE</th>
                                    <th>IDENTIFICATION CARD</th>
                                    <th>NAME</th>
                                    <th>LAST NAME</th>
                                    <th>E-MAIL</th>
                                    <th>STATE</th>
                                    <th>UPDATE</th>
                                    <th>DELETE</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </main>