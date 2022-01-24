<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Web Developer</title>

        <link rel="stylesheet" href="../03 - Bootstrap4/css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body style="background-color: #343a40;">
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#"><img src="logo.png" width="250px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sobre.php">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contato.php">Contato</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!---- Carrossel ---->
    <main role="main">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class=""></li>
          <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item">
            <img class="first-slide" width="100%" src="./css/financeiro.png" alt="First slide">
            <div class="container">
              <div id="dive1carrossel" class="carousel-caption text-left text-dark">

                <p>Programa simples primeiramente escrito em Python, agora reescrito em PHP7 utilizando Bootstrap4, Banco de Dados MySQL e API PHPMailer. É um programa simples de usar e sem curva de aprendizado. Basta fazer o Login e cadastrar suas contas.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Entrar</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item active">
            <img class="second-slide" width="100%" src="./css/celke.png" alt="Second slide">
            <div class="container">
              <div id="dive2carrossel" class="carousel-caption">
                
                <p>Curso fantástico no estilo mãos a massa.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Navegar nas Pastas dos Códigos</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" width="100%" src="./3.png" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>One more for good measure.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </main>

    

    <script src="../03 - Bootstrap4/js/jquery-3.5.1.slim.min.js"></script>
    <script src="../03 - Bootstrap4/js/bootstrap.bundle.min.js"></script>
    <script src="../03 - Bootstrap4/js/popper.min.js"></script>
    <script src="../03 - Bootstrap4/js/bootstrap.min.js"></script>
    </body>
</html>