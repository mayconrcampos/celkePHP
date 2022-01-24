<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatorial</title>
    <style>
        body {
            background-color:lightblue;
            text-align:center;
        }
        div {
            padding:15px;
            margin:10px;
            background-color:white;
            border-radius: 5px 5px 5px;
            box-shadow:4px 4px 5px black;
        }
    </style>
</head>
<body>
    <h1>Função calcula fatorial</h1>
    <div>
        <h2>Minha fatorial</h2>
        <form action="" method="get">
            <label>Digite um Número</label>
            <input type="text" name="calcula">
            <input type="submit" value="Calcular">
        </form>
        <br><br>
        <?php
        $numero = $_GET["calcula"];

        function fatorial($num){
            if($num == 1){
                return 1;
            }else{
                return $num * fatorial($num - 1);
            }
        }

        echo "<h4>Fatorial de $numero</h4>";
        echo "<p>".fatorial($numero)."</p>";
        ?>
    </div>
    <footer>Estudos de PHP - Maycon R. Campos</footer>
    
</body>
</html>