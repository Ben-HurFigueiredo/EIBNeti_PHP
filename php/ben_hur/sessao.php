<?php


/* iniciar sessao */


session_start();

$_SESSION["usuario"] = "Jair Sonaro";
$_SESSION["Autenticado"] = true;

#Acessando os valores


if($_SESSION["Autenticado"]){
    
    
    echo "O Usuário ". $_SESSION["usuario"]. " Foi Autenticado Com Sucesso! <hr> ";
    
}else{
    
    
    echo "O Usuário ". $_SESSION["usuario"]. " NÃO Foi Autenticado! <hr> ";
    
    
}


session_unset();
session_destroy();




?>