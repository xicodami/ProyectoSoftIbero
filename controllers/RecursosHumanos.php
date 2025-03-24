<?php session_start();
require_once "models/Candidato.php"; 
require_once "components/alertsweet.php";
class RecursosHumanos
{
    public function __construct()
    {
    }

    public function index()
    {
        header("Location: ?c=Dashboard");
    }

    public function RecursosHumanos()
    {
        $rol = $_SESSION['rol'];
        if ($rol == 1) {
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/RecursosHumanos/RecursosHumanos.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
            }
        } else {
            header("Location: ?c=Dashboard");
        }
    }

    public function Formatos()
    {
        $rol = $_SESSION['rol'];
        if ($rol == 1) {
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/RecursosHumanos/Seleccion/Formatos.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
            }
        } else {
            header("Location: ?c=Dashboard");
        }
    }

    public function FormatosInternos()
    {
        $rol = $_SESSION['rol'];
        if ($rol == 1) {
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/RecursosHumanos/Seleccion/FormatosInternos.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
            }
        } else {
            header("Location: ?c=Dashboard");
        }
    }

    public function FormatosExternos()
    {
        $rol = $_SESSION['rol'];
        if ($rol == 1) {
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/RecursosHumanos/Seleccion/FormatosExternos.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
            }
        } else {
            header("Location: ?c=Dashboard");
        }
    }

    //----- REGISTRAR NUEVO CANDIDATO -------------//

    public function RegistrarNuevoCandidato()
    {
        $rol = $_SESSION['rol'];
        if ($rol == 1) {
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/RecursosHumanos/Seleccion/RegistroCandidato.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $primer_apellido = strtoupper($_POST['primer_apellido']); // Convertir a mayúsculas
                $segundo_apellido = strtoupper($_POST['segundo_apellido']); // Convertir a mayúsculas
                $primer_nombre = strtoupper($_POST['primer_nombre']); // Convertir a mayúsculas
                $segundo_nombre = strtoupper($_POST['segundo_nombre']); // Convertir a mayúsculas
                $departamento = strtoupper($_POST['departamento']); // Convertir a mayúsculas
                $municipio = strtoupper($_POST['municipio']); // Convertir a mayúsculas
                $RH = strtoupper($_POST['RH']); // Convertir a mayúsculas
                $sexo = strtoupper($_POST['sexo']); // Convertir a mayúsculas
                $lugar_expedicion = strtoupper($_POST['lugar_expedicion']); // Convertir a mayúsculas
                
                $candidato = new Candidato(
                    null,
                    $_POST['usuario_codigo'],
                    $_POST['cedula'],
                    $primer_apellido,
                    $segundo_apellido,
                    $primer_nombre,
                    $segundo_nombre,
                    $_POST['fecha_nacimiento'],
                    $departamento,
                    $municipio,
                    $RH,
                    $sexo,
                    $_POST['fecha_expedicion'],
                    $lugar_expedicion
                );
                $candidato->registrarCandidato();
                header("Location: ?c=RecursosHumanos&a=consultarCandidato&param=1");
            }
        } else {
            header("Location: ?c=Dashboard");
        }
    }

     // ---------- CONSULTAR CANDIDATO  ----------//

     public function consultarCandidato(){
        $rol = $_SESSION['rol'];
        if ($rol == 1) {
            if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['param'] == 2) {
                $candidato = new Candidato;
                $candidato = $candidato->consultarCandidatos();
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/RecursosHumanos/Seleccion/consultarCandidato.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['param'] == 1) {
                $candidato = new Candidato;
                $candidato = $candidato->consultarCandidatos();
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/RecursosHumanos/Seleccion/consultarCandidato.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
                if($candidato){
                $alert = new Alertsweet();
                $alert->alert("Candidato Registrado!","?c=RecursosHumanos&a=consultarCandidato&param=2");
              }
            }
            if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['param'] == 3) {
                $candidato = new Candidato;
                $candidato = $candidato->consultarCandidatos();
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/RecursosHumanos/Seleccion/consultarCandidato.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
                if ($candidato) {
                  $alert = new Alertsweet();
                  $alert->alert("Candidato Actualizado!","?c=RecursosHumanos&a=consultarCandidato&param=2");
                }
            }
            if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['param'] == 4) {
                $candidato = new Candidato;
                $candidato = $candidato->consultarCandidatos();
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/RecursosHumanos/Seleccion/consultarCandidato.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
                if ($candidato) {
                  $alert = new Alertsweet();
                  $alert->alertDelete('?c=RecursosHumanos&a=eliminarCandidatos&id_candidato='.$_GET['id_candidato']);
                }
            }
        } else {
            header("Location: ?c=Dashboard");
        }
    }

    //----- ACTUALIZAR CANDIDATO -------------//

    public function actualizarCandidato()
    {
        $rol = $_SESSION['rol'];
        if ($rol == 1) {
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $candidato = new Candidato;
                $candidato = $candidato->obtenerCandidatoPorId($_GET['id_candidato']);
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/RecursosHumanos/Seleccion/ActualizarCandidato.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $primer_apellido = strtoupper($_POST['primer_apellido']); // Convertir a mayúsculas
                $segundo_apellido = strtoupper($_POST['segundo_apellido']); // Convertir a mayúsculas
                $primer_nombre = strtoupper($_POST['primer_nombre']); // Convertir a mayúsculas
                $segundo_nombre = strtoupper($_POST['segundo_nombre']); // Convertir a mayúsculas
                $municipio = strtoupper($_POST['municipio']); // Convertir a mayúsculas
                $RH = strtoupper($_POST['RH']); // Convertir a mayúsculas
                $lugar_expedicion = strtoupper($_POST['lugar_expedicion']); // Convertir a mayúsculas
                $candidato = new Candidato(
                    $_POST['id_candidato'],
                    $_POST['usuario_codigo'],
                    $_POST['cedula'],
                    $primer_apellido,
                    $segundo_apellido,
                    $primer_nombre,
                    $segundo_nombre,
                    $_POST['fecha_nacimiento'],
                    $_POST['departamento'],
                    $municipio,
                    $RH,
                    $_POST['sexo'],
                    $_POST['fecha_expedicion'],
                    $lugar_expedicion
                );
                print_r($candidato);
                $candidato->actualizarCandidato();
                header("Location: ?c=RecursosHumanos&a=consultarCandidato&param=3");
            }
        }else{
            header("Location: ?c=Dashboard");

        }
    }

    #-------------- ELIMINAR CANDIDATOS ------------- //

    public function eliminarCandidatos()
    {
        $rol = $_SESSION['rol'];
        if ($rol == 1) {
            $candidato = new Candidato;
            $candidato->eliminarCandidato($_GET['id_candidato']);
            header("Location: ?c=RecursosHumanos&a=consultarCandidato&param=2");
        } else {
            header("Location: ?c=Dashboard");
        }
    }

    //----- CONTRATACIÓN -------------//

    public function Contratacion()
    {
        $rol = $_SESSION['rol'];
        if ($rol == 1) {
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/RecursosHumanos/Contratacion/Contratacion.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
            }
        } else {
            header("Location: ?c=Dashboard");
        }
    }

    //----- CAPACITACIÓN -------------//

    public function Capacitacion()
    {
        $rol = $_SESSION['rol'];
        if ($rol == 1) {
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/RecursosHumanos/Capacitacion/Capacitacion.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
            }
        } else {
            header("Location: ?c=Dashboard");
        }
    }

    //----- INCAPACIDADES -------------//

    public function Incapacidades()
    {
        $rol = $_SESSION['rol'];
        if ($rol == 1) {
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/RecursosHumanos/Incapacidades/Incapacidades.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
            }
        } else {
            header("Location: ?c=Dashboard");
        }
    }

    //----------- VACACIONES ----------------//

    public function PermisoVacaciones()
    {
        $rol = $_SESSION['rol'];
        if ($rol == 1) {
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/RecursosHumanos/PermisoVacaciones/PermisoVacaciones.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
            }
        } else {
            header("Location: ?c=Dashboard");
        }
    }

    //----- INDUCCIÓN -------------//

    public function Induccion()
    {
        $rol = $_SESSION['rol'];
        if ($rol == 1) {
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/RecursosHumanos/Induccion/Induccion.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
            }
        } else {
            header("Location: ?c=Dashboard");
        }
    }

    //--------- NÓMINA -------------//

    public function Nomina()
    {
        $rol = $_SESSION['rol'];
        if ($rol == 1) {
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/RecursosHumanos/Nomina/Nomina.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
            }
        } else {
            header("Location: ?c=Dashboard");
        }
    }

    //----- BIENESTAR -------------//

    public function Bienestar()
    {
        $rol = $_SESSION['rol'];
        if ($rol == 1) {
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/RecursosHumanos/Bienestar/Bienestar.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
            }
        } else {
            header("Location: ?c=Dashboard");
        }
    }

    //-------- DESCARGOS -------------//

    public function Descargos()
    {
        $rol = $_SESSION['rol'];
        if ($rol == 1) {
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/Roles/Admin/header.admin.php";
                require_once "views/modules/RecursosHumanos/Descargos/Descargos.view.php";
                require_once "views/Roles/Admin/footer.admin.php";
            }
        } else {
            header("Location: ?c=Dashboard");
        }
    }
}
