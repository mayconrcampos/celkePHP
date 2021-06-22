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
    <div class="p-3 mb-2 bg-white text-dark">
        <h1 class="display-3">Controle Financeiro</h1>
    </div>

    <div>
        <ul class="nav nav-pills nav-fill bg-white flex-column flex-sm-row">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Adicionar Contas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">Listar Todas as Contas</a>
            </li>
        </ul>
    </div>

    <div class="border border-dark  alert alert-primary table-responsive" role="alert">

        <table class="table table-sm table-striped table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Descrição</th>
                    <th>Valor (R$)</th>
                    <th>Data</th>
                    <th>Categoria</th>
                    <th>Comentário</th>
                    <th>Tipo</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
                
                <?php
                    $queryContas = mysqli_query($conn, "SELECT id, descricao, valor, DATE_FORMAT(data, '%d/%m/%Y') as 'data', categoria, comentario, tipo FROM controle ORDER BY data DESC");
                    $contaReceita = 0;
                    $contaDespesa = 0;
                    
                    while($conta = mysqli_fetch_assoc($queryContas)){?>
                    <tr>
                        <?php 
                            $tipo = ($conta['tipo']) ? true : false; 
                            if($tipo): $contaReceita += $conta['valor'];
                            else: $contaDespesa += $conta['valor'];
                            endif;

                            $saldo = $contaReceita - $contaDespesa;
                        ?>
                        
                        <th><?php echo $conta['id'];?></th>
                        <td class="text-body"><?php echo $conta['descricao'];?></td>

                        <?php 
                        $tipo = ($conta['tipo']) ? true : false; 
                        if($tipo):
                            echo "<td class='table-primary'>".number_format($conta['valor'], 2, ",", ".")."</td>";                    
                        else:
                            echo "<td class='table-danger'>".number_format($conta['valor'], 2, ",", ".")."</td>";
                        endif;
                        ?>

                        <td class="text-body"><?php echo $conta['data']; ?></td>
                        
                        <td class="text-body"><?php echo $conta['categoria'];?></td>
                        
                        <td class="text-body"><?php echo $conta['comentario'];?></td>
                        
                        <td class="text-body"><?php $tipo = ($conta['tipo'] == 1) ? "Receita" : "Despesa"; echo $tipo;?></td>
                        
                        <td class="alert"><a   class="text-dark" href="editarConta.php?id=<?php echo $conta['id']; ?>"><img src="css/pencil-fill.svg"></a></td>                
                        
                        <td class="alert"><a class="text text-white" href="excluirConta.php?id=<?php echo $conta['id']; ?>"><img src="css/trash-fill.svg"></a></td>
                        
                    </tr>
                   
            <?php   } ?>
                    <tr>
                        <td></td>
                        <td class="table-primary">Total Receitas (R$)</td>
                        <td class="table-primary"><?php echo number_format($contaReceita, 2, ",", ".");?></td>
                        <td class="table-danger">Total Despesas (R$)</td>
                        <td class="table-danger"><?php echo number_format($contaDespesa, 2, ",", ".");?></td>
                        <?php 
                            if($saldo < 0):?>
                                <td class="table-danger">Saldo R$</td>
                                <td class="table-danger"><?php echo number_format($saldo, 2, ",", ".");?></td>
                    <?php   else:?>
                                <td class="table-primary">Saldo R$</td>
                                <td class="table-primary"><?php echo number_format($saldo, 2, ",", ".");?></td>
                    <?php   endif;?>
                                    

                             
                    </tr>
                    
                
            </tbody>
        </table>
    </div>

    <footer class="alert alert-secondary">Programa de Controle Financeiro</footer>
    



    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>