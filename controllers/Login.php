<?php
session_start();
require_once "models/User.php";
require_once "components/alertsweet.php";

class Login
{
    public function __construct()
    {
    }

    public function index($incorrecto = false)
    {
        
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            require_once "views/Company/header.view.php";
            require_once "views/Company/index.view.php";
            require_once "views/Company/footer.view.php";
        }

        // ---------- INICIAR SESION  ----------//
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $user = new User($_POST['email'], $_POST['pass']);
            $user = $user->login();
            
            if ($user) {
                $status = $user->getUserStatus();
                $rol = $user->getRolCode();
                
                if ($status == 1) {
                    if ($rol == 1) {
                        $_SESSION['session'] = "Admin";
                        $_SESSION['rol'] = $rol;
                    } elseif ($rol == 2) {
                        $_SESSION['session'] = "Cliente";
                        $_SESSION['rol'] = $rol;
                    } elseif ($rol == 3) {
                        $_SESSION['session'] = "Colaborador";
                        $_SESSION['rol'] = $rol;
                    }
                    $user = serialize($user);
                    $_SESSION['profile'] = $user;
                    header("Location: ?c=Dashboard");
                    exit; // Importante: asegúrate de salir del script después de la redirección
                } else {
                    // Usuario inactivo
                    require_once "views/Company/header.view.php";
                    require_once "views/Company/index.view.php";
                    require_once "views/Company/footer.view.php";
                    
                    if ($incorrecto) {
                        $alert = new Alertsweet();
                        $alert->alertUserInactivo("?c=Login&a=index");
                        exit; // Importante: asegúrate de salir del script después de mostrar la alerta
                    }
                }
            } else {
                // Usuario incorrecto
                require_once "views/Company/header.view.php";
                require_once "views/Company/index.view.php";
                require_once "views/Company/footer.view.php";
                
                if ($incorrecto) {
                    $alert = new Alertsweet();
                    $alert->alertUserIncorrec("?c=Login&a=index");
                    exit; // Importante: asegúrate de salir del script después de mostrar la alerta
                }
            }
        }
    }
}

// Crear una instancia de la clase Login
$login = new Login();

// Llamar al método index y pasar true como argumento para mostrar la alerta
$login->index(true);
?>
