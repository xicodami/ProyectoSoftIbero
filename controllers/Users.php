<?php session_start();
require_once "models/User.php";
require_once "models/Rol.php";
require_once "components/Alertsweet.php";
class Users
{
    public function __construct()
    {
    }
    public function index()
    {
        header("Location: ?c=Dashboard");
    }

    // ---------- REGISTRAR USUARIOS  ----------//

    public function registrarUsuarios()
    {
        $rol = $_SESSION['rol'];
        if ($rol == 1) {
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/Usuario/registrarUsuario.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $nombreUsuario = strtoupper($_POST['userName']); // Convertir a mayúsculas
                $apellidoUsuario = strtoupper($_POST['userLastName']); // Convertir a mayúsculas
                $emailUsuario = strtoupper($_POST['userEmail']); // Convertir a mayúsculas
                $user = new User(
                    $_POST['rolCode'],
                    $_POST['userCode'],
                    $nombreUsuario,
                    $apellidoUsuario,
                    $emailUsuario,
                    $_POST['userPass'],
                    $_POST['userStatus']
                );
                $user->registrarUsuario();
                header("Location: ?c=Users&a=consultarUsuarios&param=1");
            }
        }else{
            header("Location: ?c=Dashboard");
        }
    }

    // ---------- CONSULTAR USUARIOS  ----------//

    public function consultarUsuarios(){
        $rol = $_SESSION['rol'];
        if ($rol == 1) {
            if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['param'] == 2) {
                $users = new User;
                $users = $users->consultarUsuarios();
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/Usuario/consultarUsuario.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['param'] == 1) {
                $users = new User;
                $users = $users->consultarUsuarios();
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/Usuario/consultarUsuario.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
                if($users){
                $alert = new Alertsweet();
                $alert->alert("Usuario Registrado!","?c=Users&a=consultarUsuarios&param=2");
              }
            }
            if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['param'] == 3) {
                $users = new User;
                $users = $users->consultarUsuarios();
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/Usuario/consultarUsuario.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
                if ($users) {
                  $alert = new Alertsweet();
                  $alert->alert("Usuario Actualizado!","?c=Users&a=consultarUsuarios&param=2");
                }
            }
            if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['param'] == 4) {
                $users = new User;
                $users = $users->consultarUsuarios();
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/Usuario/consultarUsuario.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
                if ($users) {
                  $alert = new Alertsweet();
                  $alert->alertDelete('?c=Users&a=eliminarUsuarios&codigoUser='.$_GET['codigoUser']);
                }
            }
        } else {
            header("Location: ?c=Dashboard");
        }
    }

    // ---------- ACTUALIZAR USUARIOS  ----------//

    public function actualizarUsuarios()
    {
        $rol = $_SESSION['rol'];
        if ($rol == 1) {
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $user = new User;
                $user = $user->obtenerUserPorId($_GET['codigoUser']);
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/Usuario/actualizarUsuario.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $actualizarnombreUsuario = strtoupper($_POST['userName']); // Convertir a mayúsculas
                $actualizarapellidoUsuario = strtoupper($_POST['userLastName']); // Convertir a mayúsculas
                $actualizaremailUsuario = strtoupper($_POST['userEmail']); // Convertir a mayúsculas
                $user = new User(
                    $_POST['rolCode'],
                    $_POST['userCode'],
                    $actualizarnombreUsuario,
                    $actualizarapellidoUsuario,
                    $actualizaremailUsuario,
                    $_POST['userPass'],
                    $_POST['userStatus']
                );
                print_r($user);
                $user->actualizarUsuario();
                header("Location: ?c=Users&a=consultarUsuarios&param=3");
            }
        }else{
            header("Location: ?c=Dashboard");

        }
    }

    // ----------ELIMINAR USUARIOS  ----------//

    public function eliminarUsuarios()
    {
        $rol = $_SESSION['rol'];
        if ($rol == 1) {
            $user = new User;
            $user->eliminarUsuario($_GET['codigoUser']);
            header("Location: ?c=Users&a=consultarUsuarios&param=2");
        } else{
            header("Location: ?c=Dashboard");

        }
    }
}
