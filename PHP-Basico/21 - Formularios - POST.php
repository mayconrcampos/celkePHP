<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários - POST</title>
</head>
<body>
    <h1>Formulários POST</h1>

    <p>O método POST transmite os dados do formulário através do corpo da mensagem encaminhada ao servidor.</p>

    <hr>
        <h3>Exemplo de Formulário POST</h3>
    
        <form action="21-processaPOST.php" method="POST">
            <label>Nome</label>
            <input type="text" name="nome" placeholder="Digite o nome" required>
            <label>Email</label>
            <input type="text" name="email" placeholder="Digite o email" required>
            <br><br>
            <input type="submit" value="Cadastrar">
        </form>
    
</body>
</html>