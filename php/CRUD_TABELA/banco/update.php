<?php

/* requisição do arquivo conecta.php */
require_once "conecta.php";

/* pega o valor do parâmetro na URL 'id'  $_GET[] */
$id = filter_input(INPUT_GET,"id");
$nome = filter_input(INPUT_POST,"nome");
$sobrenome = filter_input(INPUT_POST,"sobrenome");
$data = filter_input(INPUT_POST,"data");
$genero = filter_input(INPUT_POST,"genero");
$es = filter_input(INPUT_POST,"es");


# Cria uma string com a instrução SQL



$query = "UPADATE pessoa SET nome = '$nome', sobrenome = '$sobrenome', data_nascimento = '$data', genero = '$genero', estado_civil = '$es', where id = '$id' ";


# Verifica se executou a instrução SQL 

if(mysqli_query($conn,$query)){
     
    
    echo "<script>mensagem()</script>";
    
    
    
    
}else{
    
    echo "ERRO!";
    
    
}


#Encerra conexão 
mysqli_close($conn);
?>


<script>
    
    function mensagem (){
        
        
        alert('Registro Editado !');
        location='select.php';
           
        
        return true;
    }
    
    
    
</script>
