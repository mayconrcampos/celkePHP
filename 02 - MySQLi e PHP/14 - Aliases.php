<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>14 - Aliases</title>
</head>
<body>
    <h1>Aliases</h1>

    <p>Aliases SQL são usados para fornecer para uma tabela ou uma coluna um nome temporário.</p>

    <p>Os aliases são frequentemente usados para tornar os nomes das colunas mais legíveis.</p>

    <p>Um aliás só existe durante a duração da consulta.</p>

    <h4>Sintaxe</h4>

    <p><strong>SELECT</strong> coluna <strong>AS</strong> aliase FROM tabela;</p>
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

    <?php
    include_once("01 - conexao.php");

    $queryUsuarios = mysqli_query($conn, "SELECT nome AS putaquepariu FROM usuarios");

    while($linhaUsuarios = mysqli_fetch_assoc($queryUsuarios)){
        echo "Nome: ".$linhaUsuarios['putaquepariu']."<br>";
    }
    ?>


</body>
</html>