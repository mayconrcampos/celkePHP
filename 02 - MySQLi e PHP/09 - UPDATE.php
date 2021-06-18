<?php
include_once("01 - conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
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
    <h1>UPDATE - Atualizando registros no Banco de Dados</h1>
    
    <div>
        <form action="" method="post">
            <label>ID</label>
            <input type="text" name="id" placeholder="Digite o ID do registro a ser modificado"><br>

            <label>Nome</label>
            <input type="text" name="nome" placeholder="Digite o nome"><br>

            <label>Email</label>
            <input type="email" name="email" placeholder="Digite o  Email"><br>

            <label>Situação [1] Ativo - [2] Inativo </label>
            <input type="text" name="situacao" placeholder="Digite  Situação"><br>

            <label>Nível de Acesso [1] Admin | [2] Financeiro | [3]     Cliente</label>
            <input type="text" name="acesso" placeholder="Digite o nível    de acesso"><br>
            <input type="submit" value="Atualizar">
        </form>
        <hr>
        <?php
            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $situacao = $_POST['situacao'];
            $acesso = $_POST['acesso'];

            if($id and $nome and $email and $situacao and $acesso){
                $updateUsuarios = mysqli_query($conn, "UPDATE usuarios SET nome='$nome', email='$email', situacao_id='$situacao', niveis_acesso='$acesso', modificado=NOW() WHERE id='$id'");
            
                if(mysqli_affected_rows()){
                    echo "Update realizado com sucesso!";
                }else{
                    echo "Erro ao atualizar registro!";
                }
            }else{
                echo "É necessário setar o ID do registro que você queira atualizar.";
            }
        ?>
    </div>
    <div>
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
                $queryUsuario = mysqli_query($conn, "SELECT * FROM usuarios ORDER BY nome");

                while($linhaUsuario = mysqli_fetch_assoc($queryUsuario)){
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
    </div>
    <hr>
    <footer>Estudos de PHP - Maycon R. Campos - 06/2021</footer>
    
</body>
</html>
