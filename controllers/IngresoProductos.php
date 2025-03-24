<?php session_start();
require_once "models/IngresoProducto.php";
require_once "models/Categoria.php";
require_once "models/Producto.php";
require_once "components/alertsweet.php";
require_once "models/Proveedor.php";
require_once "models/User.php";
class IngresoProductos
{
    public function __construct()
    {
    }
    public function index()
    {
        header("Location: ?c=Dashboard");
    }

    #------------REGISTRAR INGRESO DEL PRODUCTO------------//

    public function registrarIngresoProductos()
    {
        $rol = $_SESSION['rol'];
        if ($rol == 1) {

            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/IngresoProducto/ingresoProducto.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                
                $marca = strtoupper($_POST['marca']); // Convertir a mayúsculas
                $numerofactura = strtoupper($_POST['numerofactura']); // Convertir a mayúsculas
                $referencia = strtoupper($_POST['referencia']); // Convertir a mayúsculas
                
                $ingresoProducto = new IngresoProducto(
                    null,
                    $_POST['id_producto'],
                    $_POST['cantidad_producto'],
                    $_POST['id_categoria'],
                    null,
                    $marca,
                    $numerofactura,
                    $_POST['id_proveedor'],
                    $_POST['nit'],
                    $_POST['fechafacturareal'],
                    $referencia,
                    $_POST['PrecioCompra'],
                    $_POST['IvaIncluido'],
                    $_POST['ValorIva'],
                    $_POST['Total'],
                    $_POST['usuario_codigo']
                );
                $ingresoProducto->registrarIngresoProductoModels();
                header("Location: ?c=IngresoProductos&a=consultarIngresoProductoContr&param=1");
            }
        } else {
            header("Location: ?c=Dashboard");
        }
    }

    #------------CONSULTAR INGRESO DEL PRODUCTO------------//

    public function consultarIngresoProductoContr()
    {
        $rol = $_SESSION['rol'];
        if ($rol == 1) {
            if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['param'] == 2) {
                $IngresoProductos = new IngresoProducto;
                $IngresoProductos = $IngresoProductos->consultarIngresoProductoModel();
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/IngresoProducto/consultarIngresoProducto.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['param'] == 1) {
                $IngresoProductos = new IngresoProducto;
                $IngresoProductos = $IngresoProductos->consultarIngresoProductoModel();
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/IngresoProducto/consultarIngresoProducto.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
                if ($IngresoProductos) {
                    $alert = new Alertsweet();
                    $alert->alert("Ingreso Producto Registrado!", "?c=IngresoProductos&a=consultarIngresoProductoContr&param=2");
                }
            }
            if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['param'] == 3) {
                $IngresoProductos = new IngresoProducto;
                $IngresoProductos = $IngresoProductos->consultarIngresoProductoModel();
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/IngresoProducto/consultarIngresoProducto.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
                if ($IngresoProductos) {
                    $alert = new Alertsweet();
                    $alert->alert("Ingreso Producto Actualizado!", "?c=IngresoProductos&a=consultarIngresoProductoContr&param=2");
                }
            }
            if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['param'] == 4) {
                $IngresoProductos = new IngresoProducto;
                $IngresoProductos = $IngresoProductos->consultarIngresoProductoModel();
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/IngresoProducto/consultarIngresoProducto.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
                if ($IngresoProductos) {
                    $alert = new Alertsweet();
                    $alert->alertDelete('?c=IngresoProductos&a=eliminarIngresoProducto&id_ingr_produc='.$_GET['id_ingr_produc']);
                }
            }
        } else {
            header("Location: ?c=Dashboard");
        }
    }


    #-------------- ACTUALIZAR INGRESO PRODUCTO -------------//

    public function actualizarIngresoProducto()
    {
        $rol = $_SESSION['rol'];
        if ($rol == 1) {
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $ingresoproducto = new IngresoProducto;
                $ingresoproducto = $ingresoproducto->obtenerIngresoProductosPorId($_GET['id_ingr_produc']);
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/IngresoProducto/actualizarIngresoProducto.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $marca = strtoupper($_POST['marca']); // Convertir a mayúsculas
                $numerofactura = strtoupper($_POST['numerofactura']); // Convertir a mayúsculas
                $referencia = strtoupper($_POST['referencia']); // Convertir a mayúsculas
                $ingresoproducto = new IngresoProducto(
                    $_POST['id_ingr_produc'],
                    $_POST['id_producto'],
                    $_POST['cantidad_producto'],
                    $_POST['id_categoria'],
                    $_POST['fecha'],
                    $marca,
                    $numerofactura,
                    $_POST['id_proveedor'],
                    $_POST['nit'],
                    $_POST['fechafacturareal'],
                    $referencia,
                    $_POST['PrecioCompra'],
                    $_POST['IvaIncluido'],
                    $_POST['ValorIva'],
                    $_POST['Total'],
                    $_POST['usuario_codigo']
                );
                $ingresoproducto->actualizarIngresoProductoModels();
                header("Location: ?c=IngresoProductos&a=consultarIngresoProductoContr&param=3");
            }
        } else {
            header("Location: ?c=Dashboard");
        }
    }

    #-------------- ELIMINAR INGRESO PRODUCTO -------------//

    public function eliminarIngresoProducto()
    {
        $rol = $_SESSION['rol'];
        if ($rol == 1) {

            $IngresoProductos = new IngresoProducto;
            $IngresoProductos->eliminarIngresoProducto($_GET['id_ingr_produc']);
            header("Location: ?c=IngresoProductos&a=consultarIngresoProductoContr&param=2");
        } else {
            header("Location: ?c=Dashboard");
        }
    }
}
