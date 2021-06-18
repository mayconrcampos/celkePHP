<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>13 - Between</title>
</head>
<body>
    <h1>Operador BETWEEN</h1>

    <p>O operador <strong>BETWEEN</strong> é usada para selecionar valores dentro de um intervalo. </p>

    <h2>Sintaxe</h2>

    <p><strong>SELECT</strong> coluna <strong>FROM</strong> tabela <strong>WHERE</strong> coluna <strong>BETWEEN</strong> valor 1 and valor2;</p>

    <hr>

    <form>
        <fieldset>
        <legend>Somente para apertar o botão</legend>
            <label>
                Aperta o maldito botão
            </label>
            <input type="submit" value="Enviar">
        </fieldset>
    </form>

    <?php
        require_once("01 - conexao.php");
        $queryUsuarios = mysqli_query($conn, "SELECT id, nome, email FROM usuarios WHERE niveis_acesso BETWEEN 1 and 3");
        echo "<br>";
        while($linhaUsuarios = mysqli_fetch_assoc($queryUsuarios)){
            echo "ID: ".$linhaUsuarios['id']."</br>"
                ."Nome: ".$linhaUsuarios['nome']."<br>"
                ."email: ".$linhaUsuarios['email']."<br><hr>";

        }
    
    ?>


    
</body>
</html>