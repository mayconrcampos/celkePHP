<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>12 - Operador IN</title>
    <style>
        table {
            background-color:white;
            margin-left:auto;
            margin-right:auto;
        }
    </style>
</head>
<body>
    <h1>Operador IN</h1>

    <p>O operador IN permite especificar vários valores em uma cláusula WHERE. Trata-se de uma abreviatura para múltiplas condições OR.</p>

    <h2>Sintaxe</h2>
    <p>SELECT column_name (s)</p>
    <p>FROM table_name WHERE column_name IN (value1, value2 ...);</p>

    <h3>Traduzindo</h3>
    <p>Seleciona coluna da tabela nome_tabela onde a coluna possua valores definidos na procura.</p>

    <hr>
    <h1>Formulário</h1>

    <form action="" method="POST">
        <fieldset>
            <label>
                Procurar usuários que possuam níveis de acesso 1 e 2.
            </label>
            <input type="submit" value="Procurar">
        </fieldset>
    </form>

    <table border="1px">
    
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Email</td>
            <td>Niveis Acesso</td>
        </tr>
    <?php
        include_once("01 - conexao.php");

        // Neste exemplo esta variável é totalmente inútil.
        $pesquisar = filter_input(INPUT_POST, "procurar", FILTER_SANITIZE_SPECIAL_CHARS);

        if(!$pesquisar){
            $queryUsuarios = mysqli_query($conn, 
            "SELECT id, nome, email, niveis_acesso FROM usuarios WHERE niveis_acesso IN (1, 3)");

            $conta = 1;
            while($linhaUsuarios = mysqli_fetch_assoc($queryUsuarios)){
                $conta++;
                echo "<tr><td>".$linhaUsuarios['id']."</td>"
                    ."<td>".$linhaUsuarios['nome']."</td>"
                    ."<td>".$linhaUsuarios['email']."</td>"
                    ."<td>".$linhaUsuarios['niveis_acesso']."</td></tr>";
            }
            if($conta == 0){
                echo "<h3>Esta query não retornou nenhum resultado.</h3>";
            }
        }else{
            echo "ERRO! É preciso preencher o campo antes de clicar em procurar.";
        }  
    
    ?>
    
    </table>

    
</body>
</html>