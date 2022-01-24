<?php
include_once("01 - conexao.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cláusula LIKE</title>
</head>
<body>
    <h1>Operador Like</h1>
    <p>O operador like é usado em uma cláusula WHERE para pesquisar um padrão especificado em uma coluna.</p>

    <div>
        <form action="" method="post">
            <label>Procurar</label>
            <input type="text" name="nome"><br>
            <input type="submit" name="procura" value="Procurar">
        </form>
    </div>

    <?php
        if(isset($_POST['procura'])){
            $erros = array();

            $procurar = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);

            if($procurar){
                $usuarioQuery = mysqli_query($conn, "SELECT * FROM usuarios WHERE nome like '%$procurar%'");
    
                $conta = 0;
                while($linhaUsuarios = mysqli_fetch_assoc($usuarioQuery)){
                    $conta++;
                    echo "ID: ".$linhaUsuarios['id']."<br>"
                        ."Nome: ".$linhaUsuarios['nome']."<br>"
                        ."Email: ".$linhaUsuarios['email']."<br>"
                        ."Situação ID: ".$linhaUsuarios['situacao_id']."<br>"
                        ."Níveis Acesso: ".$linhaUsuarios['niveis_acesso']. "<br>"
                        ."Entrada: ".$linhaUsuarios['entrada']."<br>"
                        ."Modificado: ".$linhaUsuarios['modificado'].   "<br><hr>";
                }
                if(!$conta){
                    echo "Nenhum registro encontrado.";
                }
            }else{
                echo "Digite o nome para procurar.";
            }
            
        }
        

        

        
    ?>
    <br>
    <a href="08 - INSERT.php">Inserir </a>


    
</body>
</html>