<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exportando Banco de Dados</title>
</head>
<body>
    <h1>Exportando base de dados.</h1>

    <div>
        <h2>Formulário</h2>
        <form action="18 - processarDB.php" method="post" enctype="multipart/form-data">
            <label for="">Servidor</label>
            <input type="text" name="servidor" placeholder="Digite o nome do servidor"><br><br>

            <label for="">Usuário</label>
            <input type="text" name="usuario" placeholder="Digite o nome do usuario"><br><br>

            <label for="">Senha</label>
            <input type="password" name="senha" placeholder="Digite a senha"><br><br>

            <label for="">Nome da Database</label>
            <input type="text" name="dbname" placeholder="Digite o nome da base de dados"><br><br>

            <input type="submit" value="Exportar">



        </form>
    </div>
    
</body>
</html>