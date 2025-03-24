<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Actualizar Rol</h1>
            <a type="submit" href="?c=Roles&a=consultarRoles" class="btn bg-secondary text-dark">Atrás</a><hr>

            <div class="row">
                <form action="" method="post" class="form-neon" autocomplete="off">
                    <fieldset>
                        <legend><i class="far fa-plus-square"></i> &nbsp; Información del Rol</legend>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="item_nombre" class="bmd-label-floating">Nombre Rol:</label>
                                        <input type="text" pattern="[a-zA-záéíóúÁÉÍÓÚñÑ0-9 ]{1,140}" class="form-control" name="nombreRol" id="item_nombre" maxlength="140" value="<?php echo $rol->getRolName() ?>"   required style="text-transform: uppercase;">
                                    </div>
                                    <div class="form-group">
                                        <label for="item_nombre" class="bmd-label-floating"></label>
                                        <input type="hidden" pattern="[a-zA-záéíóúÁÉÍÓÚñÑ0-9 ]{1,140}" class="form-control" name="codigoRol" id="item_nombre" maxlength="140" value="<?php echo $rol->getRolCode() ?>">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <p class="text-center" style="margin-top: 40px;">
                        
                        &nbsp; &nbsp;
                        <button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; Actualizar Rol</button>
                    </p>
                </form>
            </div>
        </div>
    </main>
    