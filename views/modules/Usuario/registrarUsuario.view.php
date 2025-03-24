<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Registrar Usuario</h1>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <form action="" method="POST" class="form-neon" autocomplete="off">
                        <fieldset>
                            <legend><i class="far fa-address-card"></i> &nbsp; Información personal</legend>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <label class="">Seleccione un Rol:</label>
                                        <div class="">
                                            <div class="form-group">
                                                <select class="form-control" name="rolCode" required>
                                                    <option value="" selected disabled>Seleccione Rol</option>
                                                    <?php
                                                    $roles = New Rol();
                                                    $roles = $roles->consultarRol();
                                                    foreach ($roles as $rol) {
                                                        ?>
                                                        <option value="<?php echo $rol->getRolCode(); ?>"><?php echo $rol->getRolName(); ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">

                                        <div class="form-group">
                                            <label for="userCode" class="bmd-label-floating">Cédula Usuario:&nbsp;(sin puntos)</label>
                                            <input type="text" class="form-control" name="userCode" id="userCode" maxlength="20" pattern="[0-9]*" title="Ingrese solo números sin puntos" required placeholder="Solo números sin puntos">
                                        </div>

                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="form-group">
                                            <label for="userName" class="bmd-label-floating">Nombres:</label>
                                            <input type="text" class="form-control" name="userName" id="userName" maxlength="35" pattern="[0-9\a-zA-Z\s\-áéíóúÁÉÍÓÚñÑüÜ]+[^\d]+" title="Por favor ingrese solo letras se aceptan con caracteres especiales" required style="text-transform: uppercase;">
                                        </div>

                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="form-group">
                                            <label for="userLastName" class="bmd-label-floating">Apellidos:</label>
                                            <input type="text" class="form-control" name="userLastName" id="userLastName" maxlength="35" pattern="[0-9\a-zA-Z\s\-áéíóúÁÉÍÓÚñÑüÜ]+[^\d]+" title="Por favor ingrese solo letras se aceptan con caracteres especiales" required style="text-transform: uppercase;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <br><br><br>
                        <fieldset>
                            <legend><i class="fas fa-user-lock"></i> &nbsp; Información de la cuenta:</legend>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="userEmail" class="bmd-label-floating">Email:</label>
                                            <input type="email" class="form-control" name="userEmail" id="userEmail" maxlength="70" required style="text-transform: uppercase;">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="userPass" class="bmd-label-floating">Contraseña:</label>
                                            <input type="password" class="form-control" name="userPass" id="userPass" maxlength="200" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="userPassConfirm" class="bmd-label-floating">Repetir contraseña:</label>
                                            <input type="password" class="form-control" name="userPassConfirm" id="userPassConfirm" maxlength="200" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="" class="bmd-label-floating">Seleccione Estado:</label>
                                            <select class="form-control" name="userStatus" required>
                                                <option value="" selected="" disabled="">Seleccione una opción</option>
                                                <option value="1">ACTIVO</option>
                                                <option value="0">INACTIVO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                        </fieldset>
                        <p class="text-center" style="margin-top: 40px;">
                            <a type="submit" href="?c=Users&a=registrarUsuarios" class="btn bg-secondary text-dark">Cancelar</a>
                            <input class="btn btn-success letra3" type="submit" value="Registrar Usuario">
                            <a href="?c=Users&a=consultarUsuarios&param=2" class="btn btn-primary"> Lista De Usuarios</a>
                            <a href="?c=Dashboard" class="btn btn-secondary">Atrás</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </main>