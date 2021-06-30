<?php
session_start();

$ide = 25;

$p = $_GET['id'];
echo $p;

$_SESSION['id'] = $ide;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviando variável grobau pro emeio</title>
    <style>
        #dive {
            text-align: center;
            margin: auto;
            background-color: white;
            color: black;
        }
    </style>
</head>
<body>
    <h1>Vamo ve se dá certo</h1>

  
        <a href="enviar_email.php?id='<? echo $ide?>">confirmar a porra toda</a>

    
</body>
</html>