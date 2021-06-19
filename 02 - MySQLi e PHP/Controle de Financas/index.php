<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle Financeiro Doméstico</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="alert alert-primary" role="alert">
        <h1 class="font-weight-bold">Controle Financeiro</h1>
    </div>
    <div class="alert alert-primary" role="alert">
        <form action="" method="post">
            <div class="form-group form-check form-check-inline">
            <fieldset>
                <legend>Inserir</legend>

                <input type="radio" name="radio" value="1" class="form-check-input">
                <label for="receitas" class="form-check-label">Receitas</label>

                <input type="radio" name="filtro" value="0" class="form-check-input">
                <label for="despesas" class="form-check-label">Despesas</label>

                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Descrição</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="descricao">
                </div>


                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">R$</span>
                    </div>
                    <input type="text" name="valor" class="form-control" aria-label="Quantia">
                 
                </div>

                <input type="submit" value="Enviar" class="btn btn-primary btn-lg btn-block">


            </fieldset>
            </div>
        </form>
    </div>


    





    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>