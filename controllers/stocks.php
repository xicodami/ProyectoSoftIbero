<?php session_start();
require_once "models/Stock.php";
class stocks
{
    public function __construct()
    {
    }
    public function index()
    {
        header("Location: ?c=Dashboard");
    }

    #------------ CONSULTAR STOCK ------------//

    public function consultarStocksContr()
    {
        $rol = $_SESSION['rol'];
        if ($rol == 1) {
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $stocks = new Stock;
                $stocks = $stocks->consultarstockModel();
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/Stock/Stock.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
            }
        }else{
            header("Location: ?c=Dashboard");
        }
    }
}
