<?php session_start();
require_once "models/Producto.php";
require_once "models/Categoria.php";
require_once "components/Alertsweet.php";
class Productos
{
    public function __construct()
    {
    }
    public function index()
    {
        header("Location: ?c=Dashboard");
    }

    #------------REGISTRAR PRODUCTO------------//

    public function registrarProductos()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            require_once "views/Roles/Admin/header.admin.php";
            require_once "views/modules/Producto/registrarProducto.view.php";
            require_once "views/Roles/Admin/footer.admin.php";
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nombreProducto = strtoupper($_POST['name_productos']); // Convertir a mayúsculas
            $productos = new Producto(
                null,
                $nombreProducto,
                $_POST['id_categoria']
            );
            $productos->registrarProductos();
            header("Location: ?c=Productos&a=consultarProducto&param=1");
        }
    }





    public function consultarProducto()
    {
        $rol = $_SESSION['rol'];
        if ($rol == 1) {
            if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['param'] == 2) {
                $producto = new Producto;
                $producto = $producto->consultarProductos();
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/Producto/consultarProducto.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['param'] == 1) {
                $producto = new Producto;
                $producto = $producto->consultarProductos();
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/Producto/consultarProducto.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
                if ($producto) {
                    $alert = new Alertsweet();
                    $alert->alert("Producto Registrado!", "?c=Productos&a=consultarProducto&param=2");
                }
            }
            if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['param'] == 3) {
                $producto = new Producto;
                $producto = $producto->consultarProductos();
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/Producto/consultarProducto.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
                if ($producto) {
                    $alert = new Alertsweet();
                    $alert->alert("Producto Actualizado!", "?c=Productos&a=consultarProducto&param=2");
                }
            }
            if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['param'] == 4) {
                $producto = new Producto;
                $producto = $producto->consultarProductos();
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/Producto/consultarProducto.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
                if ($producto) {
                    $alert = new Alertsweet();
                    $alert->alertDelete('?c=Productos&a=eliminarProductos&id_producto='.$_GET['id_producto']);
                }
            }
        } else {
            header("Location: ?c=Dashboard");
        }
    }


    #-------------- ACTUALIZAR PRODUCTOS ------------- //

    public function actualizarProductos()
    {
        $rol = $_SESSION['rol'];
        if ($rol == 1) {
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $producto = new Producto;
                $producto = $producto->obtenerProductoPorId($_GET['id_producto']);
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/Producto/actualizarProducto.view.php";
                require_once "views/roles/admin/footer.admin.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $actualizarNombreProducto = strtoupper($_POST['name_productoActu']); // Convertir a mayúsculas
                $producto = new Producto(
                    $_POST['id_productoActu'],
                    $actualizarNombreProducto,
                    $_POST['id_categoriaActu']
                );
                $producto->actualizarProducto();
                header("Location: ?c=Productos&a=consultarProducto&param=3");
            }
        } else {
            header("Location: ?c=Dashboard");
        }
    }

    #-------------- ELIMININAR PRODUCTOS ------------- //

    public function eliminarProductos()
    {
        $producto = new Producto;
        $producto->eliminarProducto($_GET['id_producto']);
        header("Location: ?c=Productos&a=consultarProducto&param=2");
    }
}
