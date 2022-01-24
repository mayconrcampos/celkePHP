<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>03 - Bootstrap GRID</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <h1>Bootstrap - GRID</h1>

    <p>O framework Bootstrap divide a página em GRID, ou seja, grade com linhas e colunas.</p>

    <h2>Usando col-sm para as colunas.</h2>
    <div class="alert alert-primary container">
        <div class="row">
            <div class="col-sm">
              One of three columns
            </div>
            <div class="col-sm">
              One of three columns
            </div>
            <div class="col-sm">
              One of three columns
            </div>
        </div>
    </div>

    <h2>Utilizando col-lg (large) para determinar a largura das colunas.</h2>
    <div class="alert alert-primary container container-fluid">
        <div class="row">
            <div class="col-lg">
              One of three columns
            </div>
            <div class="col-lg">
              One of three columns
            </div>
            <div class="col-lg">
              One of three columns
            </div>
        </div>
    </div>

    <h2>Utilizando col-4 col-2 col-6</h2>

    <div class="alert alert-primary container container-fluid">
        <div class="row">
            <div class="col-4">
              One of three columns
            </div>
            <div class="col-2">
              One of three columns
            </div>
            <div class="col-6">
              One of three columns
            </div>
        </div>
    </div>




    

    


    
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
</body>
</html>