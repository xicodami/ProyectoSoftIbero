<?php session_start();

class Ventas
{
    public function __construct()
    {
    }
    public function index()
    {
        header("Location: ?c=Dashboard");
    }
    public function Ventas()
    {
        $rol = $_SESSION['rol'];
        if ($rol == 1) {
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/Ventas/Ventas.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
            }
        } else {
            header("Location: ?c=Dashboard");
        }
    }
}
