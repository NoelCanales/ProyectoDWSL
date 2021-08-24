<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comida</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

    <style>
        .ho:hover {
            text-shadow: none !important;
            box-sizing: border-box !important;
            cursor: pointer !important;
            transition: all 0.3s ease !important;
            -webkit-transform: scale(1.1) !important;
            -ms-tranform: scale(1.1) !important;
            transform: scale(1.1) !important;
            z-index: 2;
        }
        nav{
        height: 120px;
}
            body{
                background-color:#4f27df;
            }
    </style>
</head>

<body background>

    <br>
    <div class="row">
        <div class="col-sm-12">
        <nav class="navbar navbar-expand navbar-dark bg-primary" >
  <a class="navbar-brand" href="#">Elige un Comercio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="Home.html">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <span class="navbar-text">
       Comercios Disponibles
    </span>
  </div>
</nav>

    <div class="pt-4">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-4 pb-5 wow fadeInLeft slow">
                    <div class="card ho">
                        <div class="view overlay">
                            <img class="card-img-top" src="https://www.pollocampestre.com/wp-content/uploads/2021/01/logo-pollo-campestre.png" alt="Pollo Campestre" height="200">
                        </div>
                        <div class="card-body text-center">
                            <h4 class="card-text" align="left">Comida</h4>
                            <h2 class="card-title">Pollo Campestre</h2>
                            <a href="#" class="btn blue-gradient" align="center">Elegir</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pb-5 wow fadeInDown slow">
                    <div class="card ho">
                        <div class="view overlay">
                            <img class="card-img-top" src="https://www.hayueloscc.com/wp-content/uploads/2019/05/buffalo-wings-en-hayuelos.png" alt="Buffalo Wings" height="200">
                        </div>
                        <div class="card-body text-center">
                            <h4 class="card-text" align="left">Comida</h4>
                            <h2 class="card-title">Buffalo Wings</h2>
                            <a href="#" class="btn blue-gradient" align="center">Elegir</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pb-5 wow fadeInRight slow">
                    <div class="card ho">
                        <div class="view overlay">
                            <img class="card-img-top" src="data:image/png;base64,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" alt="Pizza Hut" height="200">
                        </div>
                        <div class="card-body text-center">
                            <h4 class="card-text" align="left">Comida</h4>
                            <h2 class="card-title">Pizza Hut</h2>
                            <a href="#" class="btn blue-gradient" align="center">Elegir</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pb-5 wow fadeInLeft slow">
                    <div class="card ho">
                        <div class="view overlay">
                            <img class="card-img-top" src="https://i.pinimg.com/originals/84/d9/a6/84d9a6130c02338eaf66d7f25b611faa.gif" alt="China Wok" height="200">
                        </div>
                        <div class="card-body text-center">
                            <h4 class="card-text" align="left">Comida</h4>
                            <h2 class="card-title">China Wok</h2>
                            <a href="#" class="btn blue-gradient" align="center">Elegir</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pb-5 wow fadeInDown slow">
                    <div class="card ho">
                        <div class="view overlay">
                            <img class="card-img-top" src="data:image/png;base64,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" alt="Subway" height="200">
                        </div>
                        <div class="card-body text-center">
                            <h4 class="card-text" align="left">Comida</h4>
                            <h2 class="card-title">Subway</h2>
                            <a href="#" class="btn blue-gradient" align="center">Elegir</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pb-5 wow fadeInRight slow">
                    <div class="card ho">
                        <div class="view overlay">
                            <img class="card-img-top" src="https://1000marcas.net/wp-content/uploads/2020/10/Wendys-logo.jpg" alt="Wendy´s" height="200">
                        </div>
                        <div class="card-body text-center">
                            <h4 class="card-text" align="left">Comida</h4>
                            <h2 class="card-title">Wendy´s</h2>
                            <a href="#" class="btn blue-gradient" align="center">Elegir</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pb-5 wow fadeInLeft slow">
                    <div class="card ho">
                        <div class="view overlay">
                            <img class="card-img-top" src="https://urbancomunicacion.com/wp-content/uploads/2018/05/Curiosa-historia-del-logo-de-Dominos-Pizza.png" alt="Domino´s Pizza" height="200">
                        </div>
                        <div class="card-body text-center">
                            <h4 class="card-text" align="left">Comida</h4>
                            <h2 class="card-title">Domino´s Pizza</h2>
                            <a href="#" class="btn blue-gradient" align="center">Elegir</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pb-5 wow fadeInDown slow">
                    <div class="card ho">
                        <div class="view overlay">
                            <img class="card-img-top" src="https://logos-marcas.com/wp-content/uploads/2020/08/Burger-King-Logotipo-1999-presente.jpg" alt="Burger King" height="200">
                        </div>
                        <div class="card-body text-center">
                            <h4 class="card-text" align="left">Comida</h4>
                            <h2 class="card-title">Burger King</h2>
                            <a href="#" class="btn blue-gradient" align="center">Elegir</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pb-5 wow fadeInRight slow">
                    <div class="card ho">
                        <div class="view overlay">
                            <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/5/56/PolloCampero_Logo.png" alt="Pollo Campero" height="200">
                        </div>
                        <div class="card-body text-center">
                            <h4 class="card-text" align="left">Comida</h4>
                            <h2 class="card-title">Pollo Campero</h2>
                            <a href="#" class="btn blue-gradient" align="center">Elegir</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

    <script>
        $(document).ready(function() {
            new WOW().init();
        });
    </script>

</body>

</html>