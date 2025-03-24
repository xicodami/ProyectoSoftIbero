<?php session_start();
require_once "models/Categoria.php";
require_once "components/Alertsweet.php";
class Categorias
{
    public function __construct()
    {
    }
    public function index()
    {
        header("Location: ?c=Dashboard");
    }

    #------------REGISTRAR CATEGORIA------------//

    public function registrarCategorias()
    {
        $rol = $_SESSION['rol'];
        if ($rol == 1) {

            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/Categoria/registrar_categoria.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $nombreCategoria = strtoupper($_POST['name_categoria']); // Convertir a mayúsculas
                $categorias = new Categoria(
                    null,
                    $nombreCategoria,
                    $_POST['usuario_codigo']
    
                );
                $categorias->registrarCategoria();
                header("Location: ?c=Categorias&a=consultarCategoria&param=1");
            }


        }else{
            header("Location: ?c=Dashboard");
        } 
    }

    #------------CONSULTAR CATEGORIA------------//

    public function consultarCategoria(){
        $rol = $_SESSION['rol'];
        if ($rol == 1) {
            if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['param'] == 2) {
                $categorias = new Categoria;
                $categorias = $categorias->consultarCategorias();
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/Categoria/read.categorias.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['param'] == 1) {
                $categorias = new Categoria;
                $categorias = $categorias->consultarCategorias();
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/Categoria/read.categorias.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
                if ($categorias) {
                    $alert = new Alertsweet();
                    $alert->alert("Categoria Registrada!","?c=Categorias&a=consultarCategoria&param=2");
                }
                
            }
            if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['param'] == 3) {
                $categorias = new Categoria;
                $categorias = $categorias->consultarCategorias();
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/Categoria/read.categorias.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
                if ($categorias) {
                  $alert = new Alertsweet();
                  $alert->alert("Categoria Actualizada!","?c=Categorias&a=consultarCategoria&param=2");
                }
            }
            if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['param'] == 4) {
                $categorias = new Categoria;
                $categorias = $categorias->consultarCategorias();
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/Categoria/read.categorias.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
                if ($categorias) {
                  $alert = new Alertsweet();
                  $alert->alertDelete('?c=Categorias&a=eliminarCategorias&id_categoria='.$_GET['id_categoria']);
                }
            }
        } else {
            header("Location: ?c=Dashboard");
        }
    }

    #-------------- ACTUALIZAR CATEGORIAS ------------- //

    public function actualizarCategorias()
    {
        $rol = $_SESSION['rol'];
        if ($rol == 1) {
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $categoria = new Categoria;
                $categoria = $categoria->obtenerCategoriaPorId($_GET['id_categoria']);
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/Categoria/actualizar_categoria.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $actualizarNombreCategoria = strtoupper($_POST['name_categoriaActu']); // Convertir a mayúsculas
                $categoria = new Categoria(
                    $_POST['id_categoria'],
                    $_POST['usuario_codigoActu'],
                    $actualizarNombreCategoria
                );
                $categoria->actualizarCategoria();
                header("Location: ?c=Categorias&a=consultarCategoria&param=3");
            }
        } else {
            header("Location: ?c=Dashboard");
        }
    }

    #-------------- ELIMINAR CATEGORIAS ------------- //

    public function eliminarCategorias()
    {
        $rol = $_SESSION['rol'];
        if ($rol == 1) {
            $categoria = new Categoria;
            $categoria->eliminarCategoria($_GET['id_categoria']);
            header("Location: ?c=Categorias&a=consultarCategoria&param=2");
        } else {
            header("Location: ?c=Dashboard");
        }
    }
}
