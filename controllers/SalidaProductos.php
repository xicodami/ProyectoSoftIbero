<?php
session_start();
require_once 'models/SalidaProducto.php';
require_once 'models/Categoria.php';
require_once 'models/Producto.php';
require_once 'components/alertsweet.php';
require_once 'models/Proveedor.php';
class SalidaProductos
{
    public function __construct()
    {
    }

    public function index()
    {
        header('Location: ?c=Dashboard');
    }

    // ------------REGISTRAR SALIDA DE PRODUCTOS------------//

    public function registrarSalidaProductos()
    {
        $rol = $_SESSION['rol'];
        if ($rol == 1) {
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once 'views/Roles/Admin/header.admin.php';
                require_once 'views/modules/SalidaProducto/SalidaProducto.view.php';
                require_once 'views/Roles/Admin/footer.admin.php';
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $marca = strtoupper($_POST['marca']); // Convertir a mayúsculas
                $numerofactura = strtoupper($_POST['numerofactura']); // Convertir a mayúsculas
                $referencia = strtoupper($_POST['referencia']); // Convertir a mayúsculas
                $salidaProducto = new SalidaProducto(
                    null,
                    $_POST['cantidad_sali_prod_KG'],
                    $_POST['id_categoria'],
                    $_POST['id_producto'],
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
                $salidaProducto->registrarSalidaProductoModels();
                header('Location: ?c=SalidaProductos&a=consultarSalidaProductoContr&param=1');
            }
        } else {
            header('Location: ?c=Dashboard');
        }
    }

    // ------------CONSULTAR SALIDA PRODUCTOS------------//

    public function consultarSalidaProductoContr()
    {
        $rol = $_SESSION['rol'];
        if ($rol == 1) {
            if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['param'] == 2) {
                $salidaProducto = new SalidaProducto();
                $salidaProducto = $salidaProducto->consultarSalidaProductoModel();
                require_once 'views/Roles/Admin/header.admin.php';
                require_once 'views/modules/SalidaProducto/consultarsalidaProducto.view.php';
                require_once 'views/Roles/Admin/footer.admin.php';
            }
            if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['param'] == 1) {
                $salidaProducto = new SalidaProducto();
                $salidaProducto->consultarSalidaProductoModel();
                require_once 'views/Roles/Admin/header.admin.php';
                require_once 'views/modules/SalidaProducto/consultarsalidaProducto.view.php';
                require_once 'views/Roles/Admin/footer.admin.php';
                if ($salidaProducto) {
                    $alert = new Alertsweet();
                    $alert->alert('Salida Producto Registrado!', '?c=SalidaProductos&a=consultarSalidaProductoContr&param=2');
                }
            }
            if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['param'] == 3) {
                $salidaProducto = new SalidaProducto();
                $salidaProducto = $salidaProducto->consultarSalidaProductoModel();
                require_once 'views/Roles/Admin/header.admin.php';
                require_once 'views/modules/SalidaProducto/consultarsalidaProducto.view.php';
                require_once 'views/Roles/Admin/footer.admin.php';
                if ($salidaProducto) {
                    $alert = new Alertsweet();
                    $alert->alert('Salida Producto Actualizado!', '?c=SalidaProductos&a=consultarSalidaProductoContr&param=2');
                }
            }
            if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['param'] == 4) {
                $salidaProducto = new SalidaProducto();
                $salidaProducto = $salidaProducto->consultarSalidaProductoModel();
                require_once 'views/Roles/Admin/header.admin.php';
                require_once 'views/modules/SalidaProducto/consultarsalidaProducto.view.php';
                require_once 'views/Roles/Admin/footer.admin.php';
                if ($salidaProducto) {
                    $alert = new Alertsweet();
                    $alert->alertDelete('?c=SalidaProductos&a=eliminarSalidaProductos&id_salida_prod='.$_GET['id_salida_prod']);
                }
            }
        } else {
            header('Location: ?c=Dashboard');
        }
    }

    // -------------- ACTUALIZAR SALIDA PRODUCTO -------------//

    public function actualizarSalidaProducto()
    {
        $rol = $_SESSION['rol'];
        if ($rol == 1) {
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $salidaProducto = new SalidaProducto();
                $salidaProducto = $salidaProducto->obtenerSalidaProductoPorId($_GET['id_salida_prod']);
                require_once 'views/Roles/Admin/header.admin.php';
                require_once 'views/modules/SalidaProducto/actualizarSalidaProducto.view.php';
                require_once 'views/Roles/Admin/footer.admin.php';
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $salidaProducto = new SalidaProducto(
                    $_POST['id_salida_prod'],
                    $_POST['cantidad_sali_prod_KG'],
                    $_POST['id_categoria'],
                    $_POST['id_producto'],
                    $_POST['fecha']
                );
                $salidaProducto->actualizarSalidaProductoModels();
                header('Location: ?c=SalidaProductos&a=consultarSalidaProductoContr&param=3');
            }
        } else {
            header('Location: ?c=Dashboard');
        }
    }

    // -------------- ELIMINAR SALIDA PRODUCTO -------------//

    public function eliminarSalidaProductos()
    {
        $rol = $_SESSION['rol'];
        if ($rol == 1) {
            $salidaProducto = new SalidaProducto();
            $result = $salidaProducto->eliminarSalidaProducto($_GET['id_salida_prod']);
            header('Location: ?c=SalidaProductos&a=consultarSalidaProductoContr&param=2');
        } else {
            header('Location: ?c=Dashboard');
        }
    }
}
