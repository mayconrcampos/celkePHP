<?php
function listar(){
            include_once("18 - CRUD - db.php");

            $listaUsuarios = mysqli_query($conn, "SELECT * FROM clientes");

            while($linhaClientes = mysqli_fetch_assoc($listaUsuarios)){                 

                echo "<tr><td>".$linhaClientes['id']."</td>"
                    ."<td>".$linhaClientes['nome']."</td>"
                    ."<td>".$linhaClientes['cpf']."</td>"
                    ."<td>".$linhaClientes['nasc']."</td>"
                    ."<td>".$linhaClientes['email']."</td></tr>";
        
            }
}

function apaga(){
    session_start();
    include_once("18 - CRUD - db.php");
    
    $deleta = mysqli_query($conn, "DELETE FROM clientes WHERE id=1");

    if(mysqli_affected_rows($conn)){
        $_SESSION['msg'] = "ID excluído com sucesso.";
    }else{
        $_SESSION['msg'] = "ERRO ao excluir registro.";
    }
}

