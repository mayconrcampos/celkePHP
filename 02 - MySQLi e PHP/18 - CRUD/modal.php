<?php
include_once("listar.php");

$id = $_GET['id'];

echo $id;



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>


                <div class='modal' tabindex='-1' id='confirma'>
                    
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Confirmar</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                                  <p>Você tem certeza que quer excluir o registro <?php echo $id; ?> ? </p>
                              </div>
                              <div class="modal-footer">
                                  <form action="deletar.php?id=<?php echo $id;?> id="form" method="GET">
                                  <button type="submit" class="btn btn-secondary" data-dismiss="modal">Cancela</button>
                                  <button type="submit" class="btn btn-primary">Confirma</button>
                                  </form>
                              </div>
                          </div>
                      </div>
                </div>

                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"          integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"          crossorigin="anonymous"></script>

                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/    popper.min.js" integrity="sha384-9/ reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU         +6BZp6G7niu735Sk7lN"  crossorigin="anonymous"></script>

                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/  bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I    +STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"     crossorigin="anonymous"></script>

    
</body>
</html>