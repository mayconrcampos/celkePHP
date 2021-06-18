<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD -  Listar</title>
</head>
<body>
    <h1>CRUD - Listar Clientes</h1>
    <table border="1px">
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>CPF</td>
            <td>Data Nascimento</td>
            <td>Email</td>
        </tr>
    <?php
    include_once("db.php");
    // Pesquisando na Tabela
    $listarClientes = mysqli_query($conn, "SELECT * FROM clientes");
    while($linhaClientes = mysqli_fetch_assoc($listarClientes)){
        echo "<tr><td>".$linhaClientes['id']."</td>"
                ."<td>".$linhaClientes['nome']."</td>"
                ."<td>".$linhaClientes['cpf']."</td>"
                ."<td>".$linhaClientes['nasc']."</td>"
                ."<td>".$linhaClientes['email']."</td></tr>";
    }
    ?>
    </table>
    
    <a href="cadastrar.php">Cadastrar Cliente</a><br>
</body>
</html>