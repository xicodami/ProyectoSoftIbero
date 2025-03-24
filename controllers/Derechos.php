<?php session_start();

class Derechos
{
    public function __construct()
    {
    }
    public function index()
    {
        header("Location: ?c=Dashboard");
    }

    public function DerechosAutor()
    {
        $rol = $_SESSION['rol'];
        if ($rol == 1) {
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/Derechos/DerechosAutor.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
            }
        } else {
            header("Location: ?c=Dashboard");
        }
    }
    public function PoliticasPrivacidad()
    {
        $rol = $_SESSION['rol'];
        if ($rol == 1) {
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/Derechos/PoliticasPrivacidad.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
            }
        } else {
            header("Location: ?c=Dashboard");
        }
    }
    public function TerminosCondiciones()
    {
        $rol = $_SESSION['rol'];
        if ($rol == 1) {
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/Derechos/TerminosCondiciones.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
            }
        } else {
            header("Location: ?c=Dashboard");
        }
    }
}
