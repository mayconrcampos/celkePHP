<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 43 - Método GET</title>
</head>
<body>
    <h1>Método GET - Exercício 43</h1>

    <p>Implemente o formulário usando o método GET com os campos código e salário. Em seguida no arquivo “exercicio0043_proc.php” responsável em receber os dados do formulário, receber os dados através do método GET, e conforme o código digitado no formulário imprima o cargo, o salário atual, o valor do aumento e seu novo salário. Os cargos estão na tabela a seguir.</p>

    <hr>

    <h2>Tabela de Cargos e Salários</h2>

    <table border="1px">
        <tr>
            <td>Código</td>
            <td>Cargo</td>
            <td>Salário (R$)</td>
            <td>Percentual %</td>
        </tr>
        <tr>
            <td>1</td>
            <td>Escriturário</td>
            <td>900,00</td>
            <td>50%</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Secretário</td>
            <td>1200,00</td>
            <td>35%</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Caixa</td>
            <td>1500,00</td>
            <td>20%</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Gerente</td>
            <td>2500,00</td>
            <td>10%</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Diretor</td>
            <td>9500,00</td>
            <td>5%</td>
        </tr>
    </table>
    <hr>
    <h2>Calcular aumento salarial</h2>

    <form action="20-procExercicio43.php" method="GET">
    
    <label>Código</label>
    <input type="text" name="codigo" placeholder="Digite o código">

    <br><br>
    <input type="submit" value="Calcular Aumento">
    
    </form>
    
</body>
</html>