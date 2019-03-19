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


$ponteiro2 = fopen("arquivosDeUploads/arquivoDeTexto.txt","w");

$bytes = fwrite($ponteiro2, "Arquivo Gravdo Com Sucesso! \n");

echo "Foram gravados $bytes bytes";

echo "<hr>";
# Grava uma Sting independentemente de Identificador

file_put_contents("arquivosDeUploads/arquivoDeTexto.txt","Conteúdo gravado novamente");

/* lê o conteúdo do arquivo, independente de identificador */
echo file_get_contents("arquivosDeUploads/arquivoDeTexto.txt") , "<hr>";

/* lê o arquivo e retorna um array, cada linha lida representa índice desse array */

$arrayLeitura = file("arquivo/comandos_saida.php");
//print_r($arrayLeitura);
foreach($arrayLeitura as $linha){
	echo "$linha <br>";
}


echo "<hr>";



/* copy - copia arquivo para destino/diretório que existe */
$origem = "arquivo/comandos_saida.php";
$destino = "backup/comandos_saida.php";

/* verifica se o diretório foi criado */

if(mkdir("backup")){
	echo "Diretório foi criado!!! <hr>";
}else{
    
    echo "Diretório já Existente";
    
}

/* verifica se localização se refere a um diretório */
if(is_dir("backup")){
	/* efetua a cópia do arquivo */
	if(copy($origem, $destino)){
		echo "Arquivo copiado! <hr>";
	}else{
		echo "Erro ao copiar arquivo! <hr>";
	}
}


/* rename - renomeia arquivos ou diretório */
$velho_nome = "backup/comandos_saida.php";
$novo_nome  = "backup/bkp_arquivo.php";


if(rename($velho_nome,$novo_nome)){
	echo "Arquivo renomeado! <hr>";
}else{
	echo "Erro ao renomear arquivo! <hr>";
}

/* retorna o diretório corrente - caminho absoluto */
echo "O diretório corrente é " . getcwd();



/* apaga diretórios, se o mesmo estiver vazio */
if(unlink("backup/bkp_arquivo.php")){
	echo "Arquivo apagado! <hr>";
	if(rmdir("backup")){
		echo "Diretório apagado! <hr>";
	}
}

/* abre um diretório e retorna um identificador */
$dir = opendir("backup");

/* enquanto estiver lendo o diretório */
while($arquivo = readdir($dir)){
	echo "$arquivo <br>";
}

/* fecha o diretório */
closedir($dir);



// Dúvidas: como nao fazer para nao aparecer o 'warning' na tela (erro de criação de pastas / diretório não vazio)???

//Como faz paraapagar todas as pastas de um arquivo php?




?>



<html>
    <br><br>
    
    <a href="arquivo_diretorio.php">   
        <input type="button" href="arquivo_diretorio.php" value="Voltar">
    </a>
        
    
</html>

    
    
                

    
 



