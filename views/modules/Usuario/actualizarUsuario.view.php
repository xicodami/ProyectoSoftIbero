<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Actualizar Usuario</h1>
            <a type="submit" href="?c=Roles&a=consultarRoles" class="btn bg-secondary text-dark">Atrás</a>
            <hr>

            <div class="row">
                <form action="" method="post" class="form-neon" autocomplete="off">
                    <fieldset>
                        <legend><i class="far fa-address-card"></i> &nbsp; Información Personal</legend>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <input type="hidden" pattern="[0-9-]{1,20}" class="form-control" name="userCode" id="userCode" maxlength="20" value="<?php echo $user->getUserCode() ?>">
                                    <div class="form-group">
                                        <label for="userCodeM" class="bmd-label-floating">Código Usuario:</label>
                                        <input type="text" pattern="[0-9-]{1,20}" class="form-control" id="userCodeM" maxlength="20" value="<?php echo $user->getUserCode() ?>" disabled>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="rolCode" class="bmd-label-floating">Seleccione Nuevo Rol:</label>
                                        
                                        <div class="form-group">
                                                <select class="form-control" name="rolCode" required>
                                                    <option value="" selected="" disabled="">Seleccione un Rol</option>
                                                    <?php
                                                    $roles = New Rol();
                                                    $roles = $roles->consultarRoles();
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
                                        <label for="userName" class="bmd-label-floating">Nombres:</label>
                                        <input type="text" class="form-control" name="userName" id="userName" maxlength="35" value="<?php echo $user->getUserName() ?>"  pattern="[a-zA-Z\s\-áéíóúÁÉÍÓÚñÑüÜ]+[^\d]+" title="Por favor ingrese solo letras se aceptan con caracteres especiales" required style="text-transform: uppercase;">
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="userLastName" class="bmd-label-floating">Apellidos:</label>
                                        <input type="text" class="form-control" name="userLastName" id="userLastName" maxlength="35" value="<?php echo $user->getUserLastName() ?>"  pattern="[a-zA-Z\s\-áéíóúÁÉÍÓÚñÑüÜ]+[^\d]+" title="Por favor ingrese solo letras se aceptan con caracteres especiales" required style="text-transform: uppercase;">
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
                                        <input type="email" class="form-control" name="userEmail" id="userEmail" maxlength="70" value="<?php echo $user->getUserEmail() ?>" style="text-transform: uppercase;">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="userPass" class="bmd-label-floating">Contraseña:</label>
                                        <input type="password" class="form-control" name="userPass" id="userPass" maxlength="200" value="<?php echo $user->getUserPass() ?>"  title="Por favor ingrese solo letras y números no se aceptan con caracteres especiales" required style="text-transform: uppercase;">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="userPassConfirm" class="bmd-label-floating">Repetir contraseña:</label>
                                        <input type="password" class="form-control" name="userPassConfirm" id="userPassConfirm" maxlength="200" value="<?php echo $user->getUserPass() ?>" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="status" class="bmd-label-floating">Seleccione Nuevo Estado:</label>
                                        <select class="form-control" name="userStatus">
                                            <?php
                                            for ($i = 0; $i <= 1; $i++) {
                                                if ($user->getUserStatus() == $i) {
                                                    echo '<option value="' . ($i) . '" selected>' . $user->getUserStatus() . '</option>';
                                                } else {
                                                    echo '<option value="' . ($i) . '">' . ($i) . '</option>';
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                    </fieldset>
                    <p class="text-center" style="margin-top: 40px;">
                        &nbsp; &nbsp;
                        <button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; Actualizar Usuario</button>
                    </p>
                </form>
            </div>
        </div>
    </main>