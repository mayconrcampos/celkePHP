<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 42</title>
    <style>
        table {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Método GET</h1>

    <p>Implemente um formulário usando o método GET, e com o campo para
receber a nota. Em seguida no arquivo “exercicio0042_proc.php” responsável
em receber os dados do formulário, receber os dados através do método GET,
e comparar a nota digitada e imprimir na tela o conceito conforme a tabela
abaixo:</p>

<table width="30%" border="1px">
    <tr>
        <td>Média Ponderada</td>
        <td>Conceito</td>
    </tr>
    <tr>
        <td>8,0 a 10,0</td>
        <td>A</td>
    </tr>
    <tr>
        <td>7,0 a 7,9</td>
        <td>B</td>

    </tr>
    <tr>
        <td>6,0 a 6,9</td>
        <td>C</td>
    </tr>
    <tr>
        <td>5,0 a 5,9</td>
        <td>D</td>
    </tr>
    <tr>
        <td>0,0 a 4,9</td>
        <td>E</td>
    </tr>
</table>

        <h1>Notas</h1>

        <form action="20-procExercicio42.php" method="GET">
            <label>NOTA 01</label>
            <input type="text" name="nota1" placeholder="Digite a Nota">
            <br>
            <label>NOTA 02</label>
            <input type="text" name="nota2" placeholder="Digite a Nota">
            <br>
            <label>NOTA 03</label>
            <input type="text" name="nota3" placeholder="Digite a Nota">
            <br>
            <label>NOTA 04</label>
            <input type="text" name="nota4" placeholder="Digite a Nota">
            <br><br>
            <input type="submit" value="Calcular Média">
        </form>
    
</body>
</html>