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
    <title>CRUD -  Listar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
    <h1>CRUD - Listar Clientes</h1>
    </div>

    <div>
    <table border="1px">
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
                ."<td><a href='deletar.php?id=".$linhaClientes['id']."'>Deletar</a></td></tr>";
        }
        ?>

    </table>
    </div>

    <div>
    <h3><?php
        if($conta > 0){
            echo "Número de Clientes: ".$conta;
        }else{
            echo "Nenhum registro.";
        }
    ?></h3></div>

    <a href="cadastrar.php">Cadastrar Cliente</a><br>
</body>
</html>