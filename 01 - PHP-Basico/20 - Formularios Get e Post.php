
 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>GET</title>
 </head>
 <body>
        <h1>Formulário GET</h1>

        <p>Formulários Get e POST </p>
        <p>Existem duas maneiras de passarmos parâmetros via formulários HTML: GET e POST.</p>
        <p>* GET: Os dados são enviados na URL da página.</p>
        <p>* POST: O método POST transmite dados do formulário através do corpo da mensagem encaminhada ao servidor.</p>

        <hr>
        <h3>Exemplo de Formulário GET</h3>
    
        <form action="20-processaGET.php" method="GET">
            <label>Nome</label>
            <input type="text" name="nome" placeholder="Digite o nome" required>
            <label>Email</label>
            <input type="text" name="email" placeholder="Digite o email" required>
            <br><br>
            <input type="submit" value="Cadastrar">

            

        
        </form>
 </body>
 </html>