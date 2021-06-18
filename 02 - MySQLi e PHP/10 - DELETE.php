<?php
include_once("01 - conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DELETE</title>
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
    <h1>DELETE - Excluindo registros da tabela.</h1>
    <div>
        <form action="" method="post">
            <label>ID</label>
            <input type="text" name="id" placeholder="Digite o ID do registro a ser modificado"><br>
            <input type="submit" value="Deletar">
        </form>
    </div>
    <?php
        $id = $_POST['id'];
        if($id){
            $deleteUsuarios = mysqli_query($conn, "DELETE FROM usuarios WHERE id='$id'");
            
            if(mysqli_affected_rows($conn)){
                echo "ID $id excluído com sucesso.";
            }else{
                echo "ERRO ao excluir registro.";
            }
        
        
        }else{
            echo "É necessário digitar um ID para excluir registro.";
        }
        
    ?>
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
    
</body>
</html>