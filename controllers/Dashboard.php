<?php
session_start();
require_once "models/User.php";
require_once "components/alertsweet.php";

class Dashboard
{
    public function __construct()
    {
        if (empty($_SESSION['profile'])) {
            $_SESSION['profile'] = null;
            $_SESSION['session'] = null;
        }
    }

    public function index()
    {
        if (isset($_SESSION['session'])) {
            $session = $_SESSION['session'];
            $user = unserialize($_SESSION['profile']);
            require_once "views/Roles/" . $session . "/header.admin.php";
            require_once "views/Roles/" . $session . "/" .  $session . ".view.php";
            require_once "views/Roles/" . $session . "/footer.admin.php";

            // Mostrar la alerta de usuario logueado solo si no se ha mostrado antes
            if (!isset($_SESSION['alertShown'])) {
                $alert = new Alertsweet();
                $alert->alertUserLogueado("?c=Dashboard&a=index");
                $_SESSION['alertShown'] = true; // Marcar la alerta como mostrada
            }
        } else {
            header("Location:?");
        }
    }
}

// Crear una instancia de la clase Dashboard
$dashboard = new Dashboard();

// Llamar al método index para mostrar el dashboard
$dashboard->index();
?>
