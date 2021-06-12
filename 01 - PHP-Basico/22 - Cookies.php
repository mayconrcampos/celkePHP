<?php

/**
 * Cookies - O que são?
 * 
 * São arquivos-texto (espiões) que são criados e abertos no computador do usuário para recuperar dados de qualquer página.
 * 
 * - Com os cookies pode ser feito "TUDO" que sua imaginação permitir, mas as principais causas que eles são utilizadas são:
 * 
 * - Verificar se um usuário já logou no site, ou seja, validar se o cookie existe no computador.
 * - Verificar se um usuário já votou na enquete do site.
 * - Carrinho de compras para armazenar os produtos comprados.
 * 
 * No PHP temos o método setcookie.
 * 
 * setcookie("nome_do_cookie", "valor_do_cookie");
 */
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Cookies</title>
 </head>
 <body>
    <h1>Criando um cookie</h1>

    <?php

        // Criando primeiro cookie
        setcookie("afiliado", "5323", (time() + (3 * 24 * 3600)));

        $afiliado = $_COOKIE['afiliado'];

        echo "Número do afiliado: ".$afiliado."<br>";


        // Criando mais um cookie
        setcookie("logado", "Maycon", (time() + (2 * 3600)));
        if(isset($_COOKIE['logado'])){
            echo $_COOKIE['logado'];
        }else{
            echo "Cookie inválido!";
        }
        

       // echo $logado

    ?>
     
 </body>
 </html>