<?php session_start();
require_once "models/Proveedor.php";
require_once "models/Categoria.php";
require_once "components/Alertsweet.php";
class Proveedores
{
    public function __construct()
    {
    }
    public function index()
    {
        header("Location: ?c=Dashboard");
    }

    #------------REGISTRAR PROVEEDOR------------//

    public function RegistrarProveedorControllers()
    {
        $rol = $_SESSION['rol'];
        if ($rol == 1) {
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/Proveedores/Proveedores.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $nombreProveedor = strtoupper($_POST['name_proveedor']); // Convertir a mayúsculas
                $nit = strtoupper($_POST['nit']); // Convertir a mayúsculas
                $celular = strtoupper($_POST['celular']); // Convertir a mayúsculas
                $nombreRepresentante = strtoupper($_POST['name_representante']); // Convertir a mayúsculas
                $ubicacion = strtoupper($_POST['ubicacion']); // Convertir a mayúsculas
                $emailProveedor = strtoupper($_POST['emailproveedor']); // Convertir a mayúsculas
                $proveedores = new Proveedor(
                    null,
                    $_POST['id_categoria'],
                    $nombreProveedor,
                    $nit,
                    $celular,
                    $nombreRepresentante,
                    $ubicacion,
                    $emailProveedor
                );
                $proveedores->RegistrarProveedorModels();
                header("Location: ?c=Proveedores&a=ConsultarProveedoresControllers&param=1");
            }
        }else{
            header("Location: ?c=Dashboard");
        } 
    }

    #------------CONSULTAR PROVEEDORES------------//

    public function ConsultarProveedoresControllers(){
        $rol = $_SESSION['rol'];
        if ($rol == 1) {
            if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['param'] == 2) {
                $proveedores = new Proveedor;
                $proveedores = $proveedores->ConsultarProveedoresModels();
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/Proveedores/consultarProveedores.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['param'] == 1) {
                $proveedores = new Proveedor;
                $proveedores = $proveedores->ConsultarProveedoresModels();
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/Proveedores/consultarProveedores.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
                if ($proveedores) {
                    $alert = new Alertsweet();
                    $alert->alert("Proveedor Registrado!","?c=Proveedores&a=ConsultarProveedoresControllers&param=2");
                }
            }
            if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['param'] == 3) {
                $proveedores = new Proveedor;
                $proveedores = $proveedores->ConsultarProveedoresModels();
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/Proveedores/consultarProveedores.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
                if ($proveedores) {
                  $alert = new Alertsweet();
                  $alert->alert("Proveedor Actualizado!","?c=Proveedores&a=ConsultarProveedoresControllers&param=2");
                }
            }
        } else {
            header("Location: ?c=Dashboard");
        }
    }
















    
    #-------------- ACTUALIZAR CATEGORIAS ------------- //

    // Actualizar Rol
    // public function actualizarCategorias()
    // {
    //     $rol = $_SESSION['rol'];
    //     if ($rol == 1) {
    //         if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    //             $categoria = new Categoria;
    //             $categoria = $categoria->obtenerCategoriaPorId($_GET['id_categoria']);
    //             require_once "views/Roles/Admin/header.admin.php";
    //             require_once "views/modules/Categoria/actualizar_categoria.view.php";
    //             require_once "views/Roles/Admin/footer.admin.php";
    //         }
    //         if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //             $actualizarNombreCategoria = strtoupper($_POST['name_categoriaActu']); // Convertir a mayúsculas
    //             $categoria = new Categoria(
    //                 $_POST['id_categoria'],
    //                 $_POST['usuario_codigoActu'],
    //                 $actualizarNombreCategoria
    //             );
    //             $categoria->actualizarCategoria();
    //             header("Location: ?c=Categorias&a=consultarCategoria&param=3");
    //         }
    //     } else {
    //         header("Location: ?c=Dashboard");
    //     }
    // }

    // public function eliminarCategorias()
    // {
    //     $rol = $_SESSION['rol'];
    //     if ($rol == 1) {

    //         $categoria = new Categoria;
    //         $categoria->eliminarCategoria($_GET['id_categoria']);
    //         header("Location: ?c=Categorias&a=consultarCategoria&param=2");
    //     } else {
    //         header("Location: ?c=Dashboard");
    //     }
    // }
    
}
