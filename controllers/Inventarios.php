<?php session_start();
    //require_once "models/Rol.php";
    class Inventarios{
        public function __construct(){}
        public function index(){
            header("Location: ?c=Dashboard");
        }
        public function Inventario(){
            $rol = $_SESSION['rol'];
            if ($rol == 1) {
                if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                    require_once "views/Roles/Admin/header.admin.php";
                    require_once "views/modules/Inventario/inventarios.view.php";            
                    require_once "views/Roles/Admin/footer.admin.php";
                }
                // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                //     $rol = new Rol(
                //         null,
                //         $_POST['rol']
                //     );                
                //     $rol->registrarRol();
                //     header("Location: ?c=Roles&a=consultarRoles");
                // }                
            } else {                
                header("Location: ?c=Dashboard");
            }
        }
        
    }

