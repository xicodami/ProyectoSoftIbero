<?php session_start();

class CrmContr
{
    public function __construct()
    {
    }
    public function index()
    {
        header("Location: ?c=Dashboard");
    }
    public function CrmContr()
    {
        $rol = $_SESSION['rol'];
        if ($rol == 1) {
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/Crm/Crm.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
            }
        } else {
            header("Location: ?c=Dashboard");
        }
    }
}
