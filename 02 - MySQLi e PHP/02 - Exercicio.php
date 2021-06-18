<?php


// Criando as credenciais do DB
$servidor = "localhost";
$usuario = "root";
$senha = "5DaJ10.,Xw,8";
$nomeDB = "controle";

// Criando a conexão usando as credenciais
$conn = mysqli_connect($servidor, $usuario, $senha, $nomeDB);

// Teste de conexão
if($conn){
    echo "Conectado com Sucesso!";
}else{
    die("Fudeu!".mysqli_connect_error());
}

// Criando a SELECT
$selectControle = mysqli_query($conn, "SELECT * FROM pessoa");

// Imprimindo DB
while($linhaControle = mysqli_fetch_assoc($selectControle)){
    echo "<p>ID: ".$linhaControle["id"]."</p>"
        ."<p>Nome: ".$linhaControle["nome"]."</p>"
        ."<p>Empresa: ".$linhaControle["empresa"]."</p>"
        ."<p>Marca: ".$linhaControle["carro_marca"]."</p>"
        ."<p>Modelo: ".$linhaControle["carro_mod"]."</p>"
        ."<p>Cor: ".$linhaControle["carro_cor"]."</p>"
        ."<p>Placa: ".$linhaControle["placa"]."</p>"
        ."<p>Hora Entrada: ".$linhaControle["entrada"]."</p><hr>";
}



