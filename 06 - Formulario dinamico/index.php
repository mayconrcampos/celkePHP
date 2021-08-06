<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário dinâmico com JQuery</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
        .form-group {
            padding: 10px;
        }
    </style>

</head>
<body>
    <h1>Formulário Dinâmico</h1>

    <?php if(isset($_SESSION['teste'])){
            echo "<h2>". var_dump($_SESSION['teste'])."</h2>";
            unset($_SESSION['teste']);
    } ?>

    

    <form id="addAula" action="./insere.php" method="post">
        <div id="formulario">
            <div class="form-group">
                <label for="">Aula</label>
                <input type="text" name="titulo[]" placeholder="Nome da Aula 0">
                <button type="button" id="addCampo"> + </button>
            </div> 
        </div>
        <div class="form-group">
            <input type="submit" value="Cadastrar" id="cadAulas" name="cadaula">
        </div>
    </form>

    


    <script>
        var cont = 1;
        $( "#addCampo" ).click(function() {
            $( "#formulario" ).append( "<div class='form-group' id='campo"+ (cont) +"'><label for=''>Aula </label><input type='text' name='titulo[]' placeholder='Nome da Aula "+ cont +"'><button type='button' id='"+(cont++)+"' class='btn-apagar'> - </button></div>" );
        });

        $( "form" ).on( "click", ".btn-apagar", function() {
            var button_id = $( this ).attr( "id" );
            $( "#campo"+ button_id +"" ).remove();
        });

        $( "#cadAulas" ).click(function() {
            // Receber os dados
            var dados = $( "#addAula" ).serialize();
            $.post( "insere.php", dados);
        });

        
        
    </script>

    
</body>
</html>