<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>16 - Right Join</title>
</head>
<body>
    <h1>RIGHT JOIN E LEFT JOIN</h1>

    <p>A cláusula RIGHT retorna todos os dados encontrados na tabela à direita de JOIN. Assim como LEFT JOIN retorna os dados encontrados na tabela à esquerda de JOIN. Caso não existam dados associados entre as tabelas à esquerda e à direita de JOIN, serão retornados valores nulos.</p>

    <p><strong>SELECT</strong> coluna <strong>FROM</strong> tabela1 <strong>RIGHT JOIN</strong> tabela2, <strong>ON</strong> tabela1.coluna = tabela2.coluna;</p>

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
    <hr>
    <?php
    include_once("01 - conexao.php");
    $queryUsuario = mysqli_query($conn, "SELECT user.id, user.email, user.niveis_acesso, nivelac.nome FROM usuarios AS user LEFT JOIN niveis_acesso AS nivelac ON nivelac.id = user.niveis_acesso");
    echo "<br>";
    while($linha = mysqli_fetch_assoc($queryUsuario)){
        echo "Id: ".$linha['id']."<br>"
        ."Email: ".$linha['email']."<br>"
        ."Nível Acesso: ".$linha['nome']."<br>";
    }
    ?>
    
</body>
</html>