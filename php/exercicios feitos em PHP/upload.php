<?php

#utilizando a variáveis GLOBAL $_FILES["NOME_CAMPO"]["TIPO_ATTR"]
//retornar o nome do arquivo (exemplo.jpg)
$arquivo = $_FILES["arquivo"]["name"];
//retornar o tipo do arquivo mimeType(image/jpg)
$tipo = $_FILES["arquivo"]["type"];
//retornar o tamanho do arquivo bytes(36589)
echo "Tamanho: " . $_FILES["arquivo"]["size"] . " bytes <hr>";

//função que verifica se a localização se refere a um arquivo 
if(is_file($_FILES["arquivo"]["tmp_name"])){
	echo "É um arquivo <hr>";
}else{
	echo "Não É um arquivo <hr>";
}

//cria um array de mimeTypes
$mimeTypes = array("image/png","image/jpg","image/bmp","image/gif");

//verifica  se o array contém o valor especificado
if(in_array($tipo, $mimeTypes)){
	echo "Tipo de Arquivo válido <hr>";
}else{
	echo "Tipo de Arquivo inválido <hr>";
}

$dir = "fotos/";
//verifica se o arquivo foi movido para o diretório
if(move_uploaded_file($_FILES["arquivo"]["tmp_name"],$dir.$arquivo)){
	echo "Arquivo foi movido! <hr>";
}else{
	echo "Arquivo não foi movido! <hr>";
}

//apaga arquivo de um diretório
if(unlink("fotos/$arquivo")){
	echo "Arquivo foi apagado! <hr>";
}else{
	echo "Arquivo não foi apagado! <hr>";
}



	

	







