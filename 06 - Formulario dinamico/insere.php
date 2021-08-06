<?php
session_start();
include_once("./db.php");

$titulos = $_POST['titulo'];

if(!empty($titulos)){
    $insert = "";
    $conta = 0;
    foreach($titulos as $aula){
        if($conta < count($titulos) - 1){
            $insert .= "('$aula'), ";
            $conta++;
        }else{
            $insert .= "('$aula');";
        }
        
            
    }
    echo $insert;
    $insereAulas = mysqli_query($conn, "INSERT INTO aulas (aula) VALUES ".$insert);

    if(mysqli_affected_rows($conn)){
        //header("Location: index.php");
    }else{
        echo "Fudeo!";
    }
    
}




