<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="row">
                <div class="container-fluid">
                    <h1 class="mt-4">Consultar Candidatos</h1>
                    <a type="submit" href="?c=RecursosHumanos&a=RegistrarNuevoCandidato" class="btn bg-secondary text-dark">Atrás</a>
                    <a type="submit" href="?c=RecursosHumanos&a=RegistrarNuevoCandidato" class="btn btn-info text-white">Agregar Candidato</a>
                    <hr>
                    <div class="table-responsive">
                        <table id="example" class="display nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Id candidato</th>
                                    <th>Nombre Administrador</th>
                                    <th>Cédula Candidato</th>
                                    <th>Primer Apellido</th>
                                    <th>Segundo Apellido</th>
                                    <th>Primer Nombre</th>
                                    <th>Segundo Nombre</th>
                                    <th>Fecha Nacimiento</th>
                                    <th>Departamento</th>
                                    <th>Municipio</th>
                                    <th>RH</th>
                                    <th>Sexo</th>
                                    <th>Fecha Expedición</th>
                                    <th>Lugar Expedición</th>
                                    <th>Actualizar</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($candidato as $candidato) : ?>
                                    <tr class="text-center">
                                        <td>
                                            <?php echo $candidato->getid_candidato(); ?>
                                        </td>
                                        <td>
                                            <?php echo $candidato->getusuario_codigo(); ?>
                                        </td>
                                        <td>
                                            <?php echo $candidato->getcedula(); ?>
                                        </td>
                                        <td>
                                            <?php echo $candidato->getprimer_apellido(); ?>
                                        </td>
                                        <td>
                                            <?php echo $candidato->getsegundo_apellido(); ?>
                                        </td>
                                        <td>
                                            <?php echo $candidato->getprimer_nombre(); ?>
                                        </td>
                                        <td>
                                            <?php echo $candidato->getsegundo_nombre(); ?>
                                        </td>
                                        <td>
                                            <?php echo $candidato->getfecha_nacimiento(); ?>
                                        </td>
                                        <td>
                                            <?php echo $candidato->getdepartamento(); ?>
                                        </td>
                                        <td>
                                            <?php echo $candidato->getmunicipio(); ?>
                                        </td>
                                        <td>
                                            <?php echo $candidato->getRH(); ?>
                                        </td>
                                        <td>
                                            <?php echo $candidato->getsexo(); ?>
                                        </td>
                                        <td>
                                            <?php echo $candidato->getfecha_expedicion(); ?>
                                        </td>
                                        <td>
                                            <?php echo $candidato->getlugar_expedicion(); ?>
                                        </td>
                                        <td>
                                            <a href="?c=RecursosHumanos&a=actualizarCandidato&id_candidato=<?php echo $candidato->getid_candidato() ?>" class="btn btn-success">
                                                <i class="fas fa-sync-alt"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="?c=RecursosHumanos&a=consultarCandidato&param=4&id_candidato=<?php echo $candidato->getid_candidato() ?>" class="btn btn-warning">
                                                <i class="far fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                <th>Id candidato</th>
                                    <th>Nombre Administrador</th>
                                    <th>Cédula Candidato</th>
                                    <th>Primer Apellido</th>
                                    <th>Segundo Apellido</th>
                                    <th>Primer Nombre</th>
                                    <th>Segundo Nombre</th>
                                    <th>Fecha Nacimiento</th>
                                    <th>Departamento</th>
                                    <th>Municipio</th>
                                    <th>RH</th>
                                    <th>Sexo</th>
                                    <th>Fecha Expedición</th>
                                    <th>Lugar Expedición</th>
                                    <th>Actualizar</th>
                                    <th>Eliminar</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </main>