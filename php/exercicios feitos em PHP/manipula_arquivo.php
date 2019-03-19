<?php

/* fopen - abre um arquivo e retorna um recurso */
$ponteiro = fopen("arquivo_diretorio.php","r");

echo "<pre>";
var_dump($ponteiro);

/* enquanto não chegar no fim do arquivo */
while(!feof($ponteiro)){
	/* lê uma linha do arquivo */
	$buffer = fgets($ponteiro);
	echo "$buffer <br>";
}
/* fecha o arquivo */
fclose($ponteiro);

/* grava uma string em um arquivo */
$ponteiro2 = fopen("grava.txt", "w");
$bytes = fwrite($ponteiro2, "Este é o conteúdo que será gravado");
echo "Foram gravados $bytes bytes <hr>";

/* grava uma string independente de identificador */
file_put_contents("escrever.txt","Conteúdo gravado novamente!");

/* lê o conteúdo do arquivo, independente de identificador */
echo file_get_contents("escrever.txt") , "<hr>";

/* lê o arquivo e retorna um array, cada linha lida representa índice desse array */

$arrayLeitura = file("comandos_saida.php");
//print_r($arrayLeitura);
foreach($arrayLeitura as $linha){
	echo "$linha <br>";
}

/* copy - copia arquivo para destino/diretório que existe */
$origem = "manipula_arquivo.php";
$destino = "backup/manipula_arquivo.php";

/* verifica se o diretório foi criado */
if(mkdir("backup")){
	echo "Diretório foi criado <hr>";
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
$velho_nome = "backup/manipula_arquivo.php";
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
$dir = opendir("fotos");

/* enquanto estiver lendo o diretório */
while($arquivo = readdir($dir)){
	echo "$arquivo <br>";
}

/* fecha o diretório */
closedir($dir);













