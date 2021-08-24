<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electronicas</title>

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
            background-color: #4f27df;
        }
    </style>
</head>

<body>
    <br>
    <div class="row">
        <div class="col-sm-12">
        <nav class="navbar navbar-expand navbar-dark bg-primary" >
  <a class="navbar-brand" href="#">Elige una Empresa Electronica</a>
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
       Electronicas Disponibles
    </span>
  </div>
</nav>

    <div class="pt-4">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-4 pb-5 wow fadeInLeft slow">
                    <div class="card ho">
                        <div class="view overlay">
                            <img class="card-img-top" src="https://electronica2001es.com/images/logo_hidden_bar.png" alt="Farmacia La Buena" height="200">
                        </div>
                        <div class="card-body text-center">
                            <h2 class="card-title">ELectronica 2001</h2>
                            <a href="#" class="btn blue-gradient" align="center">Elegir</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pb-5 wow fadeInDown slow">
                    <div class="card ho">
                        <div class="view overlay">
                            <img class="card-img-top" src="https://radioshackla-prod-grupounicomer.netdna-ssl.com/media/wysiwyg/rs-logo.png" alt="Farmacia San Rey" height="200">
                        </div>
                        <div class="card-body text-center">
                            
                            <h2 class="card-title">RadioShack</h2>
                            <a href="#" class="btn blue-gradient" align="center">Elegir</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pb-5 wow fadeInRight slow">
                    <div class="card ho">
                        <div class="view overlay">
                            <img class="card-img-top" src="https://www.celularboutique.com/wp-content/uploads/2020/01/Untitled-2-01.png" alt="Farmacia Brasil" height="200">
                        </div>
                        <div class="card-body text-center">
                            
                            <h2 class="card-title">Celular Boutique</h2>
                            <a href="#" class="btn blue-gradient" align="center">Elegir</a>
                        </div>
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

</html>';