<?php



#utilizando as variáveis GLOBAL $_FILES["NOME_CAMPO"]["TIPO DE DADO"]


 $arquivo = $_FILES["arquivo"]["name"];



#Retorna o tipo do Arquivo mineType (image/jpg);


 echo "Arquivo: " . $_FILES["arquivo"]["type"] . "<br>";
 

#retornar o tamanho do arquivo bytes (36589)


 echo "Tamanho: " . $_FILES["arquivo"]["size"] . " bytes<br>";


# Função isfile




    
    if(is_file($_FILES['arquivo']['tmp_name'])){
        
            echo    "É um Arquivo";
        
        
    }else{
               
            echo "Não é!!!!";
    
    }



# verifica se um determinado se um arquivo foi movido
# FUNÇÃO MUITO IMPORTANTE!!!!


$dir= "arquivosDeUploads/";
if(move_uploaded_file($_FILES["arquivo"]["tmp_name"],$dir.$arquivo)){
    
    echo "<br> Arquivo foi movido com sucesso";
    
}else{
    
    
    echo "Nao movido o arquivo";
}



#*/

#APAGA ARQUIVO DE UM DIRETÓRIO


// daqui

//if(unlink("arquivosDeUploads/$arquivo")){
if(unlink("arquivosDeUploads/$arquivo")){
    
    echo "<br> Arquivo foi apagado com sucesso!!";
    
}else{
    
    
    echo " Arquivo não encontrado.";
    
}


# fopen - abre um arquivo e retorna um recurso


$arqTexto="arquivosDeUploads/arquivoDeTexto.txt";

$ponteiro = fopen($arqTexto,"r");

echo "<hr>";

echo "<pre>";
var_dump($ponteiro);
echo "</pre>";


$ponteiro3 = fopen("arquivo.php","r");


# FEOF


while(!feof($ponteiro3)){
       
    $buffer = fgets($ponteiro3);
    echo "$buffer <br>";
          
}

# fecha o Arquivo 
fclose($ponteiro3);

echo "<hr noshade>";



#*/


$ponteiro2 = fopen("arquivo.php","w");



fwrite($ponteiro2, "Linha 1 \n");
fwrite($ponteiro2, "Linha 2 \n");
fwrite($ponteiro2, "Linha 3 \n");


while(!feof($ponteiro2)){
       
    $buffer2 = fgets($ponteiro2);
    echo "$buffer2 <br>";
          
}

# fecha o Arquivo 
fclose($ponteiro2);




?>



<html>
    <br><br>
    
    <a href="arquivo_diretorio.php">   
        <input type="button" href="arquivo_diretorio.php" value="Voltar">
    </a>
        
    
</html>

    
    
                

    
 



