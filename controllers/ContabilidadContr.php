<?php session_start();

class ContabilidadContr
{
    public function __construct()
    {
    }
    public function index()
    {
        header("Location: ?c=Dashboard");
    }
    public function ContabilidadContr()
    {
        $rol = $_SESSION['rol'];
        if ($rol == 1) {
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/Contabilidad/Contabilidad.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
            }
        } else {
            header("Location: ?c=Dashboard");
        }
    }

    public function LibrosContables()
    {
        $rol = $_SESSION['rol'];
        if ($rol == 1) {
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/Contabilidad/LibrosContables/LibrosContables.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
            }
        } else {
            header("Location: ?c=Dashboard");
        }
    }

    public function EstadoLibros()
    {
        $rol = $_SESSION['rol'];
        if ($rol == 1) {
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/Contabilidad/EstadoLibros/EstadoLibros.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
            }
        } else {
            header("Location: ?c=Dashboard");
        }
    }

    public function BalanceGeneral()
    {
        $rol = $_SESSION['rol'];
        if ($rol == 1) {
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/Contabilidad/BalanceGeneral/BalanceGeneral.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
            }
        } else {
            header("Location: ?c=Dashboard");
        }
    }

    public function RegistroActivos()
    {
        $rol = $_SESSION['rol'];
        if ($rol == 1) {
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/Contabilidad/RegistroActivos/RegistroActivos.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
            }
        } else {
            header("Location: ?c=Dashboard");
        }
    }

    public function RegistroPasivos()
    {
        $rol = $_SESSION['rol'];
        if ($rol == 1) {
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/Contabilidad/RegistroPasivos/RegistroPasivos.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
            }
        } else {
            header("Location: ?c=Dashboard");
        }
    }

    public function RegistroIngresosyEgresos()
    {
        $rol = $_SESSION['rol'];
        if ($rol == 1) {
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/Contabilidad/RegistroIngresosEgresos/RegistroIngresosEgresos.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
            }
        } else {
            header("Location: ?c=Dashboard");
        }
    }
}
