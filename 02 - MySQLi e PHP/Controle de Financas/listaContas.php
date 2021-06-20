<?php
session_start();
include_once("db.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle Financeiro Doméstico</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="alert alert-primary" role="alert">
        <h1>Lista de Contas</h1>
    </div>

    <div class="alert alert-primary" role="alert">

        <table class="table table-striped table-hover table-responsive table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Descrição</th>
                    <th>Valor (R$)</th>
                    <th>Data</th>
                    <th>Categoria</th>
                    <th>Comentário</th>
                    <th>Tipo</th>
                </tr>
            </thead>
            <tbody>
                
                <?php
                    $queryContas = mysqli_query($conn, "SELECT id, descricao, valor, DATE_FORMAT(data, '%d/%m/%Y') as 'data', categoria, comentario, tipo FROM controle");
                    $contaReceita = 0;
                    $contaDespesa = 0;
                    $conta = 0;
                    while($conta = mysqli_fetch_assoc($queryContas)){?>
                    <tr>
                        <?php $conta++; 
                            $tipo = ($conta['tipo']) ? true : false; 
                            if($tipo): $contaReceita += $conta['valor'];
                            else: $contaDespesa += $conta['valor'];
                            endif;
                        ?>
                        
                        <th><?php echo $conta['id'];?></th>
                        <td><?php echo $conta['descricao'];?></td>

                        <?php 
                        $tipo = ($conta['tipo']) ? true : false; 
                        if($tipo):
                            echo "<td class='table-primary'>".number_format($conta['valor'], 2, ",", ".")."</td>";                    
                        else:
                            echo "<td class='table-danger'>".number_format($conta['valor'], 2, ",", ".")."</td>";
                        endif;
                        ?>

                        <td><?php echo $conta['data']; ?></td>
                        <td><?php echo $conta['categoria'];?></td>
                        <td><?php echo $conta['comentario'];?></td>
                        <td><?php $tipo = ($conta['tipo'] == 1) ? "Receita" : "Despesa"; echo $tipo;?></td>                  
                        
                    </tr>
                   
            <?php   } ?>
                    <tr>
                        <td></td>
                        <td class="table-primary"><?php echo "Total Receitas (R$)";?></td>
                        <td class="table-primary"><?php echo number_format($contaReceita, 2, ",", ".");?></td>
                        <td class="table-danger"><?php echo "Total Despesas (R$)"?></td>
                        <td class="table-danger"><?php echo number_format($contaDespesa, 2, ",", ".");?></td>
                    </tr>
                    
                
            </tbody>
        </table>
        <a href="index.php">Adicionar Conta</a>
    </div>
    



    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>