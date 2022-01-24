<?php
session_start();
if($_SESSION['msg']):
    echo $_SESSION['msg'];
    $_SESSION['msg'] = "";
endif;

$id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD -  Listar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <div>
    <h1>CRUD - Listar Clientes</h1>
    </div>

    <div class="container table table-hover table-responsive table-striped table-sm">
    <table border="1px" class="table">
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>CPF</td>
            <td>Data Nascimento</td>
            <td>Email</td>
            <td>Editar</td>
            <td>Deletar</td>
        </tr>
    <?php
    include_once("db.php");
    // Pesquisando na Tabela
    $listarClientes = mysqli_query($conn, "SELECT * FROM clientes");
    $conta = 0;
    while($linhaClientes = mysqli_fetch_assoc($listarClientes)){
        $conta++;
        echo "<tr><td>".$linhaClientes['id']."</td>"
                ."<td>".$linhaClientes['nome']."</td>"
                ."<td>".$linhaClientes['cpf']."</td>"
                ."<td>".$linhaClientes['nasc']."</td>"
                ."<td>".$linhaClientes['email']."</td>"
                ."<td><a href='atualizar.php?id=".$linhaClientes['id']."'>Editar</a></td>"
                ."<td><a href='deletar.php?id=".$linhaClientes['id']."'onclick=\"return confirm('Tem certeza que deseja deletar esse registro?');\">Excluir</a></td>"; 
   } 

        ?>

    </table>
    </div>


    <div>
    <h3><?php
        if($conta > 0){
            echo "Número de Registros: ".$conta;
        }else{
            echo "Nenhum registro.";
        }
    ?></h3></div>
    <div class="container-sm">
    <footer>
        <a href="cadastrar.php">Cadastrar</a>
        <a href="pesquisar.php"> - Pesquisar</a>
    </footer>
    </div>





    
    <script src="js/personalizado.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/    popper.min.js" integrity="sha384-9/ reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"  crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/  bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I    +STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"     crossorigin="anonymous"></script>

</body>
</html>