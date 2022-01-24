<?php
include_once("01 - conexao.php");

/**
 * Operadores AND e OR.
 * 
 * AND e OR são usados para filtrar registros com base em mais de uma condição.
 */

 $usuariosQuery = mysqli_query($conn, "SELECT * FROM usuarios WHERE niveis_acesso='3' OR situacao_id='1'");
?>


<html>
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <style>
        body {
            text-align:center;
            background-color:#3092B1;
            
        }
        table {
            color:black;
            border-radius:5px 5px 5px;
            border-color:black;
            background-color:white;
            text-align:left;
            width: 800px;
        }
    </style>
    <head>

    </head>
    <body>
    <h1>SELECT com cláusulas AND e OR</h1>
    <p>AND e OR são usados para filtrar registros com base em mais de uma condição.</p>
    <table border="1px">
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Email</td>
        </tr>
<?php
 while($linhaUsuario = mysqli_fetch_assoc($usuariosQuery)){
     echo "<tr><td>".$linhaUsuario["id"]."</td>"
        ."<td>".$linhaUsuario["nome"]."</td>"
        ."<td>".$linhaUsuario["email"]."</td></tr>";
 }
 ?>
    </table>
    <br><br><br><br><br><br>
    <footer>Estudos de PHP e MySQLi<footer>
    </body>
</html