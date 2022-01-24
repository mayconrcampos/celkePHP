<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>17 - Funções MySQLi</title>
</head>
<body>
    <h1>Count(), AVG() e SUM()</h1>

    <ul>
        <li>A função COUNT() retorna o número de linhas da pesquisa.</li>
        <li>A função AVG() retorna o valor médio de uma coluna numérica.</li>
        <li>A função SUM() retorna a soma total de uma coluna numérica.</li>
    </ul>

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
    
    // Contando o total de usuarios que cumpram a condição
    $queryUsuario = mysqli_query($conn, "SELECT COUNT(id) AS qtde FROM usuarios WHERE niveis_acesso = 3");

    $linhaUser = mysqli_fetch_assoc($queryUsuario);


    echo "<br>Quantidade de usuarios: ".$linhaUser['qtde']."<br>";

    // Somando todos os campos ids que são acima de 0
    $outroQuery = mysqli_query($conn, "SELECT SUM(id) as soma FROM usuarios WHERE id > 2");

    $somaLinhas = mysqli_fetch_assoc($outroQuery);

    echo "<br>Somando os campos ID: ".$somaLinhas['soma']."<br>";

    // Tirando a média dos campos niveis_acesso
    $queryMedia = mysqli_query($conn, "SELECT AVG(niveis_acesso) AS media FROM usuarios WHERE id > 0");

    $linhaMedia = mysqli_fetch_assoc($queryMedia);

    echo "<br>Média do campo niveis_acesso: ".round($linhaMedia['media'])."<br>";


    
    ?>
    
</body>
</html>