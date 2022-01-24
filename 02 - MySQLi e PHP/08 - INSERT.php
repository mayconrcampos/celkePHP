<?php
include_once("01 - conexao.php");
/**
 * INSERT INTO - é a cláusula de inserção de registro no banco de dados.
 */
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERT INTO</title>
    <style>
        body {
            background-color:grey;
            text-align:center;
        }
        div {
            background-color:lightgrey;
            padding:10px;
            margin:10px;
            border-radius: 5px 5px 3px;
            box-shadow:5px 5px 3px black;

        }
        form {
            padding:10px;
        }
        input {
            margin:5px;
            padding:8px;
        }
        table {
            background-color:white;
            margin-left:auto;
            margin-right:auto;
        }
    </style>
</head>
<body>
    <h1>INSERT INTO - Inserindo registros no Banco de Dados</h1>
    
    <div>
    <form action="" method="POST">
        <label>Nome</label>
        <input type="text" name="nome" placeholder="Digite o nome"><br>

        <label>Email</label>
        <input type="email" name="email" placeholder="Digite o Email"><br>

        <label>Situação [1] Ativo - [2] Inativo </label>
        <input type="text" name="situacao" placeholder="Digite Situação"><br>

        <label>Nível de Acesso [1] Admin | [2] Financeiro | [3] Cliente</label>
        <input type="text" name="acesso" placeholder="Digite o nível de acesso"><br>
        <input type="submit" value="Cadastrar">
    </form>
    <hr>
    </div>
    <?php
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $situacao = $_POST['situacao'];
        $acesso = $_POST['acesso'];

        if(($situacao >= 1 and $situacao <=2) and ($acesso >= 1 and    $acesso <= 3)){
            $insertUsuarios = mysqli_query($conn, "INSERT INTO usuarios (nome, email, situacao_id, niveis_acesso, criado)  VALUES ('$nome', '$email', '$situacao', '$acesso', NOW())")  ;
        }else{
            echo "Usuário ID ou Nível de Acesso inválido!";
        }
        
        if(mysqli_insert_id($conn)){
            echo "Usuário inserido com sucesso!<br>";
        }else{
            echo "ERRO ao inserir usuário!<br>";
        }
    ?>
    <table border="1px">
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Email</td>
            <td>Situação ID</td>
            <td>Níveis Acesso</td>
            <td>Criado</td>
            <td>Modificado</td>
        </tr>
        <?php
            $queryUsuarios = mysqli_query($conn, "SELECT * FROM usuarios ORDER BY nome ASC");
            while($linhaUsuario = mysqli_fetch_assoc($queryUsuarios)){
                echo "<tr><td>".$linhaUsuario["id"]."</td>"
                    ."<td>".$linhaUsuario["nome"]."</td>"
                    ."<td>".$linhaUsuario["email"]."</td>"
                    ."<td>".$linhaUsuario["situacao_id"]."</td>"
                    ."<td>".$linhaUsuario["niveis_acesso"]."</td>"
                    ."<td>".$linhaUsuario["criado"]."</td>"
                    ."<td>".$linhaUsuario["modificado"]."</td></tr>";
            }
        ?>
    </table>
    
    <footer>Estudos de PHP - Maycon R. Campos - 06/2021</footer>
    
</body>
</html>