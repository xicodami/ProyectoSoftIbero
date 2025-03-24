<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Registrar Rol</h1>
            <a type="submit" href="?c=Dashboard" class="btn bg-secondary text-dark">Atrás</a>
            <div class="row">
                <form action="" method="POST" class="me-0 me-md-3 my-2 my-md-0">
                    <div class="form-group">
                        <label for="rol" class="p-1"><b>Nombre Rol:</b></label>
                        <input type="text" class="form-control" placeholder="Nombre Nuevo Rol" name="rol" pattern="[0-9\a-zA-Z\s\-áéíóúÁÉÍÓÚñÑüÜ]+[^\d]+" title="Por favor ingrese solo letras y números se aceptan con caracteres especiales" required style="text-transform: uppercase;">
                    </div>&nbsp;
                    <div class="centrar">
                        <input class="btn btn-success" type="submit" value="Registrar Rol">&nbsp;
                        <a type="submit" href="?c=Roles&a=consultarRoles&param=2" class="btn bg-primary text-white">Lista de Roles</a>
                    </div>
                </form>
            </div>
        </div>
    </main>