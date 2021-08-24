<?php
include 'db.php';

$usuario_login=$_POST['usuario_login'];
$contraseña_login=$_POST['contraseña_login'];


$validar_login= mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario_login' 
and contraseña='$contraseña_login'");



if(mysqli_num_rows($validar_login) > 0){

    header("location: Home.html");
    exit;

}else{
    echo '<script>
            alert("Usuario No Existe, Por Favor Verifique Los Datos Introducidos");
            window.location ="index.php";
    </script>';  
    exit;  
}

?>

