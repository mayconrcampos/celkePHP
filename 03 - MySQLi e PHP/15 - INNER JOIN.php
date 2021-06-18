<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>15 - INNER JOIN</title>
</head>
<body>
    <h1>INNER JOIN</h1>

    <p>A palavra chave INNER JOIN seleciona registros que possuem valores correspondentes em ambas as tabelas.</p>

    <h3>Sintaxe</h3>
    <p><strong>SELECT</strong> Coluna <strong>FROM</strong> tabela <strong>INNER JOIN</strong> tabela2 <strong>ON</strong> tabela1.coluna = tabela2.coluna</p>

    <hr>

    <form>
        <fieldset>
        <legend>Testando aliase</legend>
            <label>
                Aperta o maldito botão
            </label>
            <input type="submit" value="Enviar">
        </fieldset>
    </form>
    <br>

    <?php
    include_once("01 - conexao.php");
    $queryUsuario = mysqli_query($conn, "SELECT user.id, user.email, user.niveis_acesso, nivelac.nome FROM usuarios AS user INNER JOIN niveis_acesso AS nivelac ON nivelac.id = user.niveis_acesso");
    echo "<br>";
    while($linha = mysqli_fetch_assoc($queryUsuario)){
        echo "Id: ".$linha['id']."<br>"
        ."Email: ".$linha['email']."<br>"
        ."Nível Acesso: ".$linha['nome']."<br>";
    }
    ?>
    
</body>
</html>