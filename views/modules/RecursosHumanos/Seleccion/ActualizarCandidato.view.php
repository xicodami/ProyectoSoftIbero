<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">ACTUALIZAR CANDIDATO</h1><br>
            <a type="submit" href="?c=RecursosHumanos&a=consultarCandidato&param=2" class="btn bg-secondary text-dark">Atrás</a>
            <a type="submit" href="?c=RecursosHumanos&a=RegistrarNuevoCandidato" class="btn btn-info text-white">Agregar Candidato</a>
            <hr>
            <div class="row">
                <form action="" method="POST" class="me-0 me-md-3 my-2 my-md-0">
                    <div class="card-group">
                        <div class="card">
                            
                            <div class="form-group">
                                <label for="rol" class="p-1"><b>Cédula Administrador:</b></label>
                                <input type="number" class="form-control" placeholder="Solo números" pattern="[0-9]" name="usuario_codigo" value="<?php echo $candidato->getusuario_codigo(); ?>" title="Por favor ingrese números sin caracteres especiales" required style="text-transform: uppercase;">
                            </div>&nbsp;
                            <div class="form-group">
                                <label for="rol" class="p-1"><b>Primer Nombre:</b></label>
                                <input type="text" pattern="[a-zA-Z]+" class="form-control" placeholder="Primer Nombre" name="primer_nombre" title="Por favor ingrese solo letras sin caracteres especiales" value="<?php echo $candidato->getprimer_nombre(); ?>" required style="text-transform: uppercase;">
                            </div>&nbsp;
                            <div class="form-group">
                                <label for="rol" class="p-1"><b>Número de Cédula (sin puntos):</b></label>
                                <input type="number" class="form-control" placeholder="Solo números" pattern="[0-9]" name="cedula" title="Por favor ingrese números sin caracteres especiales" required style="text-transform: uppercase;" value="<?php echo $candidato->getcedula(); ?>">
                            </div>&nbsp;
                            <div class="form-group">
                                <label for="rol" class="p-1"><b>Departamento:</b></label>
                                <select class="form-control" name="departamento" required>
                                    <option value="" selected="" disabled="">SELECCIONE EL DEPARTAMENTO</option>
                                    <option value="AMAZONAS">AMAZONAS</option>
                                    <option value="ANTIOQUIA">ANTIOQUIA</option>
                                    <option value="ARAUCA">ARAUCA</option>
                                    <option value="ATLANTICO">ATLÁNTICO</option>
                                    <option value="BOLIVAR">BOLÍVAR</option>
                                    <option value="BOYACA">BOYACÁ</option>
                                    <option value="CALDAS">CALDAS</option>
                                    <option value="CAQUETA">CAQUETÁ</option>
                                    <option value="CASANARE">CASANARE</option>
                                    <option value="CAUCA">CAUCA</option>
                                    <option value="CESAR">CESAR</option>
                                    <option value="CHOCO">CHOCÓ</option>
                                    <option value="CORDOBA">CÓRDOBA</option>
                                    <option value="CUNDINAMARCA">CUNDINAMARCA</option>
                                    <option value="GUAINIA">GUAINÍA</option>
                                    <option value="GUAVIARE">GUAVIARE</option>
                                    <option value="HUILA">HUILA</option>
                                    <option value="LA&nbsp;GUAJIRA">LA GUAJIRA</option>
                                    <option value="MAGDALENA">MAGDALENA</option>
                                    <option value="META">META</option>
                                    <option value="NARIÑO">NARIÑO</option>
                                    <option value="NORTE&nbsp;DE&nbsp;SANTANDER">NORTE DE SANTANDER</option>
                                    <option value="PUTUMAYO">PUTUMAYO</option>
                                    <option value="QUINDIO">QUINDÍO</option>
                                    <option value="RISARALDA">RISARALDA</option>
                                    <option value="SAN&nbsp;ANDRES&nbsp;Y&nbsp;PROVIDENCIA">SAN ANDRÉS Y PROVIDENCIA</option>
                                    <option value="SANTANDER">SANTANDER</option>
                                    <option value="SUCRE">SUCRE</option>
                                    <option value="TOLIMA">TOLIMA</option>
                                    <option value="VALLE&nbsp;DEL&nbsp;CAUCA">VALLE DEL CAUCA</option>
                                    <option value="VAUPES">VAUPÉS</option>
                                    <option value="VICHADA">VICHADA</option>
                                </select>
                            </div>&nbsp;
                            <div class="form-group">
                                <label for="rol" class="p-1"><b>Sexo:</b></label>
                                <select class="form-control" name="sexo" required>
                                    <option value="" selected="" disabled="">SELECCIONE EL SEXO</option>
                                    <option value="MASCULINO">MASCULINO</option>
                                    <option value="FEMENINO">FEMENINO</option>
                                    <option value="OTRO">OTRO</option>
                                </select>
                            </div>&nbsp;
                        </div>
                        <div class="card">
                            <div class="form-group">
                                <label for="rol" class="p-1"><b>Primer Apellido:</b></label>
                                <input type="text" pattern="[a-zA-Z]+" class="form-control" placeholder="Primer Apellido" name="primer_apellido" title="Por favor ingrese solo letras sin caracteres especiales" required style="text-transform: uppercase;" value="<?php echo $candidato->getprimer_apellido(); ?>">
                            </div>&nbsp;
                            <div class="form-group">
                                <label for="rol" class="p-1"><b>Segundo Nombre:</b></label>
                                <input type="text" pattern="[a-zA-Z]+" class="form-control" placeholder="Segundo nombre" name="segundo_nombre" title="Por favor ingrese solo letras sin caracteres especiales" required style="text-transform: uppercase;" value="<?php echo $candidato->getsegundo_apellido(); ?>">
                            </div>&nbsp;
                            <div class="form-group">
                                <label for="rol" class="p-1"><b>Municipio:</b></label>
                                <input type="text" pattern="[a-zA-Z]+" class="form-control" placeholder="municipio" name="municipio" title="Por favor ingrese solo letras sin caracteres especiales" required style="text-transform: uppercase;" value="<?php echo $candidato->getmunicipio(); ?>">
                            </div>&nbsp;
                            <div class="form-group">
                                <label for="rol" class="p-1"><b>Fecha de Expedición (Cédula):</b></label>
                                <input type="date" class="form-control" placeholder="Escriba la Fecha De la Factura Real" name="fecha_expedicion" required style="text-transform: uppercase;" value="<?php echo $candidato->getfecha_expedicion(); ?>">
                            </div>&nbsp;
                            <div class="form-group">
                                <!-- <label for="rol" class="p-1"><b>Id candidato:</b></label> -->
                                <input type="hidden" class="form-control" placeholder="Solo números" pattern="[0-9]" name="id_candidato" value="<?php echo $candidato->getid_candidato(); ?>" title="Por favor ingrese números sin caracteres especiales" required style="text-transform: uppercase;">
                            </div>&nbsp;
                        </div>
                        <div class="card">
                            <div class="form-group">
                                <label for="rol" class="p-1"><b>Segundo Apellido:</b></label>
                                <input type="text" pattern="[a-zA-Z]+" class="form-control" placeholder="segundo apellido" name="segundo_apellido" title="Por favor ingrese solo letras sin caracteres especiales" required style="text-transform: uppercase;" value="<?php echo $candidato->getsegundo_apellido(); ?>">
                            </div>&nbsp;
                            <div class="form-group">
                                <label for="rol" class="p-1"><b>Fecha de Nacimiento:</b></label>
                                <input type="date" class="form-control" name="fecha_nacimiento" required style="text-transform: uppercase;" value="<?php echo $candidato->getfecha_nacimiento(); ?>">
                            </div>&nbsp;
                            <div class="form-group">
                                <label for="rol" class="p-1"><b>RH:</b></label>
                                <input type="text" pattern="[a-zA-Z+--]+" class="form-control" placeholder="rh" name="RH" required style="text-transform: uppercase;" title="Por favor ingrese solo letras sin caracteres especiales" value="<?php echo $candidato->getRH(); ?>">
                            </div>&nbsp;
                            <div class="form-group">
                                <label for="rol" class="p-1"><b>Lugar de expedición:</b></label>
                                <input type="text" pattern="[a-zA-Z]+" class="form-control" placeholder="lugar de expedición" name="lugar_expedicion" required style="text-transform: uppercase;" title="Por favor ingrese solo letras sin caracteres especiales" value="<?php echo $candidato->getlugar_expedicion(); ?>">
                            </div>&nbsp;
                            <div class="centrar">
                                <input class="btn btn-success" type="submit" value="Actualizar Candidato">&nbsp;
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>