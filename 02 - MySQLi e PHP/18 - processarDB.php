<?php

// Recebendo dados do formulário
$servidor = filter_input(INPUT_POST, 'servidor', FILTER_SANITIZE_STRING);
$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
$senha  = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$dbname = filter_input(INPUT_POST, 'dbname', FILTER_SANITIZE_STRING);

// Criar conexão com DB
$exportDB = mysqli_connect($servidor, $usuario, $senha, $dbname);

// Incluir o arquivo que gera Backup

// Ler as tabelas
$mostraTabelas = mysqli_query($exportDB, "SHOW TABLES");

echo "Mostrando tabelas da base $dbname <br>";
while($linha = mysqli_fetch_array($mostraTabelas)){
    echo $linha[0]."<br>";
    $colunas = mysqli_query($exportDB, "SELECT * FROM ".$linha[0]);
    $num_colunas = mysqli_num_fields($colunas);
        echo "Nome da Tabela ".$linha." - Número de Colunas ". $num_colunas."<br>";
}


