<?php
session_start();
/**
 * Sessão - O que é?
 * 
 * É um recurso do PHP que permite que você salve valores (variáveis) para serem usados ao longo da visita do usuário.
 * 
 * Parecido com cookies, porém:
 * 
 * Cookies salva informações no navegador do usuário;
 * Sessão salva informações no servidor.
 */

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Sessão</title>
 </head>
 <body>
    <?php
        $_SESSION['usuario'] = "Maycon Robson Campos";
        $_SESSION['senha'] = "123456";

        echo "Usuário: ". $_SESSION['usuario'];
        echo "<br>Senha: ".$_SESSION["senha"];

        echo "<br>";


        // Para destruir uma variável global usamos unset.... 
        // Podemos destruir mais de uma variável global dentro de uma unset;  
        
        unset($_SESSION['usuario'], $_SESSION['senha']);

        if(isset($_SESSION['usuario'])){
            echo "Usuario: ".$_SESSION['usuario'];
        }else{
            echo "Variável destruída!";
        }
        

    ?>
     
 </body>
 </html>

