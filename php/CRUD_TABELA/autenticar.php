<?php

#Requisição do arquivo conecta

require_once "banco/conecta.php";


#Pega os Valores inseridos nos campos e armazena
    
    
    $login = filter_input(INPUT_POST,"login");
    $senha = filter_input(INPUT_POST,"senha");



#Instrução SQL verificas se o login e a senha estão corretos



$query = "SELECT * FROM acesso WHERE login = '$login' AND senha = '$senha' ";
    
    
#Executa a instrução SQL

$result = mysqli_query($conn, $query) or die("ERRO!");

#Inicia Seção!

session_start();



# Verifica se retornou registro


if(mysqli_num_rows($result)){
    
    #Armazena os Valores dos Campos em um Array associativo;
    
    $array = mysqli_fetch_assoc($result);
    
    
    $_SESSION["usuario"] = $array["nome"];
    $_SESSION["logado"] = true;
    
    
    #redireciona para url

    header("location:form_inserir.php");
    
}else{
    
    
    echo "<script>mensagem()</script>";
    
    
}
?>

<script>
    
    function mensagem(){
        
        alert("Erro ao Logar, tente Novamente!");
        location='index.php';
           
        return true;
        
    }
    
    
    
</script>

