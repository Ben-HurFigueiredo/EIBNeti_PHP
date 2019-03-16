<?php



#utilizando as variáveis GLOBAL $_FILES["NOME_CAMPO"]["TIPO DE DADO"]


 echo "Arquivo: " . $_FILES["arquivo"]["name"] . "<br>";



#Retorna o tipo do Arquivo mineType (image/jpg);


 echo "Arquivo: " . $_FILES["arquivo"]["type"] . "<br>";



#retornar o tamanho do arquivo bytes (36589)


 echo "Tamanho: " . $_FILES["arquivo"]["size"] . " bytes<br>";


# Função isfile



try{
    
    is_file($_FILES['arquivos']['tmp_name']);       
        
    echo "É um Arquivo";
                
}catch(Exception $e){
    
     echo "Não é!!!!";
             $e->getMessage();
    
}   



