<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload excel</title>
</head>
<body>
    <h1>Upload excel</h1>

    <form action="./processa.php" method="GET" enctype="multipart/form-data">
        <label for="">Arquivo</label>
        <input type="file" name="arquivo"><br><br>
        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>

