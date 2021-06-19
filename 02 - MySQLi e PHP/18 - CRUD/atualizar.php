<?php
session_start();
if($_SESSION['msg']):
    echo $_SESSION['msg'];
    $_SESSION['msg'] = "";
endif;

include_once("db.php");
$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

$selectUsuario = mysqli_query($conn, "SELECT * FROM clientes WHERE id='$id' LIMIT 1");
$linhaCliente = mysqli_fetch_assoc($selectUsuario);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Registro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div>
    <h1>CRUD - Atualizando Registro do Cliente</h1>
    </div>

    <div>
    <form action="atualizadb.php" method="POST">
        <fieldset>
            <legend>Editar Registro</legend>
            <label>
                Nome <input type="text" name="nome" placeholder="Insira o nome" value="<?php echo  $linhaCliente['nome'];?>">
            </label>
            <label>
                CPF <input type="text" name="cpf" placeholder="Insira o CPF" value="<?php echo  $linhaCliente['cpf'];?>">
            </label>
            <br>
            <label>
                Nascimento <input type="date" name="nasc" value="<?php echo  $linhaCliente['nasc'];?>">
            </label>
            <label>
                Email <input type="email" name="email" placeholder="Digite seu email" value="<?php echo  $linhaCliente['email'];?>">
            </label>
            <br>
            <input type="hidden" name="id" value="<?php echo $linhaCliente['id'];?>">

            <input type="submit" value="Editar Cliente">
        </fieldset>
    </form>
    
    <br>
    <a href="listar.php">Listar</a>
    <a href="pesquisar.php"> - Pesquisar</a>
    
</body>
</html>