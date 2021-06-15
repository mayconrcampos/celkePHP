<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequencia de Fibonacci</title>
    <style>
        body {
            background-color:lightblue;
            text-align:center;
        }
        div {
            padding:20px;
            margin:30px;
            background-color:white;
            border-radius:5px 5px 5px;
            box-shadow:5px 5px 3px black;
        }
    </style>
</head>
<body>
    <h1>Sequencia de Fibonacci</h1>

    <div>
        <h2>Descubra a sequencia de Fibonacci até N.</h2>

        <form action="" method="get">
            <label>Digite um número</label>
            <input type="text" name="numero">
            <input type="submit" value="Gerar Sequencia">
        </form>
        
    </div>
    <div>
    <?php
        $numero = $_GET["numero"];

        function fibo($num){
            $p = 0;
            $s = 1;
            $t = 1;
            echo "<h4>Abaixo os ". $num." primeiros números da sequencia de Fibonacci </h4>";
            for($i = 0; $i < $num; $i++){
                echo "$p ";
                $p = $s;
                $s = $t;
                $t = $p + $s;
            }
        }
        fibo($numero);
    ?>
    </div>
    <footer>Estudos de PHP - Maycon R. Campos - 06/2021</footer>
    
</body>
</html>