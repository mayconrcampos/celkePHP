<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 44</title>
</head>
<body>
    <h1>Exercício 44</h1>

    <p>Implemente um formulário usando o método POST, com os campos:
        campo para receber quantos hectares, campo para receber quantos m³ de agua é gasto para cada hectare, campo para receber qual é o custo por m³ de agua, campo para receber os custo agregados. Em seguida no arquivo “exercicio0044_proc.php” responsável em receber os dados do formulário, receber os dados através do método POST, e imprimir na tela os dados
        preenchido no formulário.</p>

    <hr>

    <h2>Preencha o Formulário</h2>

    <form action="21 - ProcExercicio44.php" method="POST">
        <label>Hectares</label>
        <input type="text" name="hectares" placeholder="Digite o Nº de Hectares">

        <br>

        <label>m³/Hectare de Água</label>
        <input type="text" name="mcubico" placeholder="Digite quantos metros cúbicos por hectare">

        <br>

        <label>Custo / m³ de Água</label>
        <input type="text" name="custo" placeholder="Digite o custo por m³ de água">

        <br>

        <label>Agregados</label>
        <input type="text" name="agregados" placeholder="Digite valor dos agregados">
        <br><br>

        <input type="submit" value="Calcular">
            
    </form>


    
</body>
</html>