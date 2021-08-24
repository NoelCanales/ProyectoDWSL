<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

    <title>Registrar</title>
</head>
<body>

               <div  class="row justify-content-center">
                <div class="col-lg-5 ">

    <form action="validar.php" method="post">
        <h2>Registrarse</h2><marquee scrolldelay=3 direction="right"><p><img src="Img/moto.gif" style="width:200px;" ></p></marquee>
        <p><b>Usuario</b><input type="text" placeholder="&#128113 Ingrese su nombre de usuario" name="usuario" required=""></p>
        <p><b>Contraseña</b> <input type="password" placeholder="&#128273 Contraseña" name="contraseña" required=""></p>
        <p><b>Correo</b><input type="text" placeholder="&#128231 Ingrese su correo" name="correo" required="";></p>
        <input type="submit" value="Registrar" name="btnregistrar">
        <br>
        <a class="btn btn-dark" href="index.php" style="float:center">Regresar</a>
    </form>
    </div>
</div>
</body>
</html>