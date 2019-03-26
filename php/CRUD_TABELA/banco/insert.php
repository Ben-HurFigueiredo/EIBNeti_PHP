<?php

require_once "conecta.php";


# Pega os Valores Informados e armazena na variável


$nome = filter_input(INPUT_POST,"nome");
$sobrenome = filter_input(INPUT_POST,"sobrenome");
$data = filter_input(INPUT_POST,"data");
$genero = filter_input(INPUT_POST,"genero");
$es = filter_input(INPUT_POST,"es");


#cria uma string com a instrução SQL 

$query = "INSERT INTO pessoa(nome,sobrenome,data_nascimento,genero,estado_civil)VALUES('$nome','$sobrenome', '$data', '$genero', '$es')";


#verifica se executou a instrução SQL


if(mysqli_query($conn,$query)){
    
    echo "Registro foi inserido com sucesso <hr>";

    
    
}else{
    
    echo "ERRO! <hr>";
    
    
}

#Encerra a conexao
mysqli_close($conn);



?>
   
    <input type="button" value="Voltar" onClick="window.open('../form_inserir.php')" >
    
