<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
require_once 'models/SalidaProducto.php';
class Alertsweet
{
  public function alert($message, $location)
  {
?>
    <script>
      Swal.fire({
        title: "<?php echo $message; ?>",
        //text: "Do you want to go to the Log In page?",
        icon: "success",
        //   showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Aceptar"
      }).then(function(result) {
        if (result.isConfirmed) {
          location.assign("<?php echo $location; ?>")
        }
      });
    </script>
  <?php
  }

  public function alertDelete($url)
  {
    // $dbh = DataBase::connection();
  ?>
    <script>
      console.log("muestra el sweet");
      Swal.fire({
        title: "Seguro deseas eliminar?",
        text: "La Información eliminada no se puede restaurar!",
        color:"white",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Si, Eliminalo!",
        cancelButtonText: "Cancelar"
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire({
            title: "Eliminado!",
            text: "Recuerda tener claro lo que no necesitas.",
            color:"white",
            icon: "success"
          }).then((ok) => {
            if (ok.isConfirmed) {
              location.assign("<?php echo $url; ?>")
            }
          });
        }
      });
    </script>
  <?php
  }
  public function alertUserIncorrec($incorrecto)
  {
  ?>
    <script>
      Swal.fire({
        icon: "error",
        title: "Verifica tus credenciales",
        text: "Usuario Incorrecto!",
        color: "white",
        footer: '<a href="#" style="color: white;">Tienes problemas?</a>'
      }).then(function(result) {
        if (result.isConfirmed) {
          location.assign("<?php echo $incorrecto; ?>")
        }
      });
    </script>
  <?php
  }
  public function alertUserInactivo($incorrecto)
  {
  ?>
    <script>
      Swal.fire({
        icon: "error",
        title: "USUARIO INACTIVO",
        text: "Comunicate con el Administrador!",
        color: "white",
        footer: '<a href="#" style="color: white;">Tienes problemas?</a>'
      }).then(function(result) {
        if (result.isConfirmed) {
          location.assign("<?php echo $incorrecto; ?>")
        }
      });
    </script>
<?php
  }
  public function alertUserLogueado($correcto)
  {
  ?>
    <script>
      Swal.fire({
        position: "top-end",
        icon: "success",
        title: "Ingreso Exitoso",
        showConfirmButton: false,
        timer: 1000
      }).then(function(result) {
        if (result.isConfirmed) {
          location.assign("<?php echo $correcto; ?>")
        }
      });
    </script>
    <?php
  }
}
?>