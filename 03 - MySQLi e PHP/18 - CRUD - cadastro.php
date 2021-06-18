<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Cadastrar</title>
    <style>
        body {
            background-color:lightblue;
            text-align:center;
        }
        div {
            background-color:lightgrey;
            padding:5px;
            margin:10px;
            border-radius: 5px 5px 3px;
            box-shadow:5px 5px 3px black;

        }
        form {
            padding:5px;
        }
        input {
            margin:5px;
            padding:8px;
        }
        table {
            width:97%;
            background-color:white;
            margin-left:auto;
            margin-right:auto;
            padding:3px;
            border-radius:5px 5px 5px;
            box-shadow:5px 5px 7px black;
        }
    </style>
</head>
<body>
    <h1>Ficha de Cadastro do Cliente</h1>
    <hr>
    <div>
    <form action="18 - cadastrar.php" method="post">
        <fieldset>
            <legend>Inserir Cliente</legend>
            <label>
                Nome <input type="text" name="nome" placeholder="Insira seu nome">
            </label>
            <label>
                CPF <input type="text" name="cpf" placeholder="Insira seu CPF">
            </label>
            <br>
            <label>
                Data Nascimento <input type="date" name="nasc">
            </label>
            <label>
                Email <input type="email" name="email" placeholder="Insira o seu melhor Email">
            </label>
            <br>
            <input type="submit" name='cadastra' value="Cadastrar">
            <input type="submit" name="apaga" value="Apagar">
     
        </fieldset>
    </form>

    </div>

    <table border='1px'>
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>CPF</td>
            <td>Nascimento</td>
            <td>Email</td>
        </tr>
        <?php session_start(); 
        session_start();
        if($_SESSION['msg']):
            echo $_SESSION['msg'];
            $_SESSION['msg'] = "";
        endif;

        include_once("18 - Funcoes.php"); listar(); 
        ?>
    </table>

        <hr>
        <footer>Estudos de PHP - Maycon Robson Campos</footer>       


</body>
</html>