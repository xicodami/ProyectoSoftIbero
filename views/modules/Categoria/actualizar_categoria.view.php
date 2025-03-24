<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Actualizar Categoria</h1>
            <a type="submit" href="?c=Inventarios&a=Inventario" class="btn bg-secondary text-dark">Atrás</a>

            <div class="row">
                <form action="" method="POST" class="me-0 me-md-3 my-2 my-md-0">
                    <div class="form-group">
                        <label for="rol" class="p-1"><b>Nombre Categoria:</b></label>
                        <input type="text" class="form-control" placeholder="Nombre Categoria" name="name_categoriaActu" value="<?php echo $categoria->getname_categoria() ?>" pattern="[áéíóúÁÉÍÓÚ\0-9\a-z\A-Z\s\-ñÑüÜ]+[^\d]+" title="Por favor ingrese solo letras y números se aceptan con caracteres especiales" required style="text-transform: uppercase;">
                    </div>&nbsp;
                    <div class="form-group">
                        <input type="hidden" class="form-control" placeholder="Escriba su cédula" name="usuario_codigoActu" required value="<?php echo $categoria->getusuario_codigo() ?>">
                    </div>&nbsp;
                    <div class="form-group">
                        <label for="item_nombre" class="bmd-label-floating"></label>
                        <input type="hidden" pattern="[a-zA-záéíóúÁÉÍÓÚñÑ0-9 ]{1,140}" class="form-control" name="id_categoria" id="item_nombre" maxlength="140" value="<?php echo $categoria->getid_categoria() ?>">
                    </div>
                    <div class="centrar">
                        <input class="btn btn-success" type="submit" value="Actualizar Categoria">&nbsp;


                    </div>
                </form>
            </div>
        </div>
    </main>
