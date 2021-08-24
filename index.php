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

    <title>Login</title>
</head>
<body>

            <div  class="row justify-content-center">
                <div class="col-lg-5 ">
     
    <form  action="login_usuario.php" method="post">
        <h2>Ingresar al Sistema</h2><p><img src="Img/imgmoto.png"  style="width:300px;"></p>
        <p><b>Usuario</b><input type="text" placeholder="&#128113 Ingrese su nombre" name="usuario_login" required=""></p>
        <p><b>Contraseña</b> <input  type="password" placeholder="&#128273 Contraseña" name="contraseña_login" required=""></p>
        <input type="submit" value="Ingresar"><br>
        <a class="btn btn-dark"  href="registro.php" style="float:center">Registrarse</a>
    </form>
          </div>
        </div>
    
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
</body>
</html>