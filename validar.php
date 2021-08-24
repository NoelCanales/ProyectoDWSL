<?php
include('db.php');

$correo=$_POST['correo'];
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];


$consulta="INSERT INTO usuarios(correo,usuario,contraseña)
          VALUES('$correo','$usuario','$contraseña')";

$ejecutar=mysqli_query($conexion, $consulta); 

if ($ejecutar) {
    echo '
        <script>
            alert("Usuario Almacenado Exitosamente");
            window.location = "index.php";
        </script>
      ';
}else {
    echo '
        <script>
            alert("Intentalo de nuevo, usuario no almacenado");
            window.location = "index.php";
        </script>
      ';
      mysqli_close($conexion);

}

?>




