<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Registrar Categoria</h1>
            <a type="submit" href="?c=Inventarios&a=Inventario" class="btn bg-secondary text-dark">Atrás</a>

            <div class="row">
                <form action="" method="POST" class="me-0 me-md-3 my-2 my-md-0">
                    <div class="form-group">
                        <label for="rol" class="p-1"><b>Nombre Categoria:</b></label>
                        <input type="text" class="form-control" placeholder="Nombre Categoria" name="name_categoria" pattern="[a-z\A-Z\s\-áéíóúÁÉÍÓÚñÑüÜ]+[^\d]+" title="Por favor ingrese solo letras se aceptan con caracteres especiales" required style="text-transform: uppercase;">
                    </div>&nbsp;
                    <div class="form-group">
                        <label for="rol" class="p-1"><b>Confirmar Cédula Administrador:</b></label>
                        <input type="number" class="form-control" placeholder="Escriba su cédula" name="usuario_codigo" required pattern="[0-9]">
                    </div>&nbsp;
                    <div class="centrar">
                        <input class="btn btn-success" type="submit" value="Registrar Categoria">&nbsp;
                        <a type="submit" href="?c=Categorias&a=consultarCategoria&param=2" class="btn bg-primary text-white">Lista de Categorias</a>

                    </div>
                </form>
            </div>
        </div>
    </main>