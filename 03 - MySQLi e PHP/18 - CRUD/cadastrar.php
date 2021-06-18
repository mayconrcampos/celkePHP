<?php
session_start();
if($_SESSION['msg']):
    echo $_SESSION['msg'];
    $_SESSION['msg'] = "";
endif;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Cadastrar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div>
    <h1>CRUD - Cadastrando Clientes</h1>
    </div>

    <div>
    <form action="cadastrodb.php" method="post">
        <fieldset>
            <legend>Insira o Cliente</legend>
            <label>
                Nome <input type="text" name="nome" placeholder="Insira o nome">
            </label>
            <label>
                CPF <input type="text" name="cpf" placeholder="Insira o CPF">
            </label>
            <br>
            <label>
                Nascimento <input type="date" name="nasc">
            </label>
            <label>
                Email <input type="email" name="email" placeholder="Digite seu email">
            </label>
            <br>
            <input type="submit" value="Cadastrar">
        </fieldset>
    </form>
    </div>
    <a href="listar.php">Listar Clientes</a><br>
    <br><hr>
    <footer>Estudos de PHP - Maycon R. Campos</footer>
    
</body>
</html>