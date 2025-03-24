<?php session_start();
require_once "models/Rol.php";
require_once "models/User.php";
require_once "components/Alertsweet.php";
class Roles
{
    public function __construct()
    {
    }
    public function index()
    {
        header("Location: ?c=Dashboard");
    }

    // ---------- REGISTRAR ROL  ----------//
    
    public function RegistrarRoles()
    {
        $rol = $_SESSION['rol'];
        if ($rol == 1) {
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/Rol/crearRol.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $nombreRol = strtoupper($_POST['rol']); // Convertir a mayúsculas
                $rol = new Rol(
                    null,
                    $nombreRol
                );
                $rol->registrarRol();
                header("Location: ?c=Roles&a=consultarRoles&param=1");
            }
        } else {
            header("Location: ?c=Dashboard");
        }
    }

    // ---------- CONSULTAR ROL  ----------//

    public function consultarRoles()
    {
        $rol = $_SESSION['rol'];
        if ($rol == 1) {
            if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['param'] == 2) {
                $roles = new Rol;
                $roles = $roles->consultarRoles();
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/Rol/consultarRol.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['param'] == 1) {
                $roles = new Rol;
                $roles = $roles->consultarRoles();
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/Rol/consultarRol.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
                if ($roles) {
                  $alert = new Alertsweet();
                  $alert->alert("Rol Registrado!","?c=Roles&a=consultarRoles&param=2");
                }
            }
            if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['param'] == 3) {
                $roles = new Rol;
                $roles = $roles->consultarRoles();
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/Rol/consultarRol.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
                if ($roles) {
                  $alert = new Alertsweet();
                  $alert->alert("Rol Actualizado!","?c=Roles&a=consultarRoles&param=2");
                }
            }
            if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['param'] == 4) {
                $roles = new Rol;
                $roles = $roles->consultarRoles();
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/Rol/consultarRol.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
                if ($roles) {
                  $alert = new Alertsweet();
                  $alert->alertDelete('?c=Roles&a=eliminarRoles&codigoRol='.$_GET['codigoRol']);
                }
            }
        } else {
            header("Location: ?c=Dashboard");
        }
    }

    // ---------- ACTUALIZAR ROL  ----------//

    public function actualizarRoles()
    {
        $rol = $_SESSION['rol'];
        if ($rol == 1) {
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $rol = new Rol;
                $rol = $rol->obtenerRolPorId($_GET['codigoRol']);
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/Rol/actualizarRol.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $actualizarnombreRol = strtoupper($_POST['nombreRol']); // Convertir a mayúsculas
                $rol = new Rol(
                    $_POST['codigoRol'],
                    $actualizarnombreRol
                );
                $rol->actualizarRol();
                header("Location: ?c=Roles&a=consultarRoles&param=3");
            }
          } else {
            header("Location: ?c=Dashboard");
        }
    }

    // ---------- ELIMINAR ROL  ----------//
    
    public function eliminarRoles()
    {
        $rol = $_SESSION['rol'];
        if ($rol == 1) {
            $rol = new Rol;
            $rol->eliminarRol($_GET['codigoRol']);
            header("Location: ?c=Roles&a=consultarRoles&param=2");
        } else {
            header("Location: ?c=Dashboard");
        }
    }
}
