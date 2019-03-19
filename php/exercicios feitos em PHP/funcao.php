<?php

#Funções

/* sintaxe declarando função */
function nome_funcao($arg, $arg2, $arg3){
	$valor = $arg + $arg2 + $arg3;
	return $valor;
}

/* variáveis globais */
$total = 0;
function km2mi($quilometros){
	global $total;
	$total += $quilometros;
	return $quilometros * 0.6;
}
echo "percorreu ". km2mi(100)." milhas <br>";
echo "percorreu ". km2mi(200)." milhas <br>";
echo "percorreu no total ".$total." milhas <hr>";

/* variáveis estáticas */
function contaCliente($nome){
	static $contador;
	$contador++;
	return "Cliente nº$contador: $nome <br>";
}
echo contaCliente("Mariana Silva");
echo contaCliente("Pedro Haidar");
echo contaCliente("Rafaela Dornas");

/* passagem de parâmetros (by value) */
function incrementaByValue($variavel, $valor){
	return $variavel += $valor;
}
$a = 5;
echo incrementaByValue($a, 15) . "<br>";
echo "$a <hr>";

/* passagem de parâmetros (by reference) */
function incrementaByReference(&$variavel, $valor){
	return $variavel += $valor;
}
$b = 5;
echo incrementaByReference($b, 15) . "<br>";
echo "$b <hr>";

/* passagem de parâmetros (valor padrão) */
function nomeSobrenome($nome, $sobrenome = ' da Silva'){
	return "$sobrenome, $nome <br>";
}
echo nomeSobrenome("Henrique");
echo nomeSobrenome("Henrique"," de Souza");
echo "<hr>";

/* variáveis argumentos */
function ola(){
	$argumentos = func_get_args();
	$quantidade = func_num_args();
	for($i=0; $i < $quantidade; $i++){
		echo "Olá $argumentos[$i] <br>";
	}
}
ola("Raimundo","Paula","Victor","Enzo","Mariana");

/* recursividade fatorial 4: 4 * 3 * 2 * 1 = 24 */
function fatorial($numero){
	//verifica se o $numero é zero ou uma
	if($numero == 0 || $numero == 1){
		return 1;
	}else{
		return $numero * fatorial($numero - 1);
	}
}
echo fatorial(4) . "<hr>";

#Strings

$str = "Isto é uma string";
$str = 'Isto é uma string';

$fruta = 'maçã';
echo "$fruta <br>"; //imprime maçã
echo '$fruta <hr>'; //imprime $fruta

/*
$texto = <<<CHAVE 
	Este é um exemplo
	de texto
	utilizando diversas linhas
	CHAVE;

echo "$texto <hr>";
*/

echo $fruta . ' é a fruta de Adão <br>';
echo "$fruta é a fruta de Adão <hr>";

/* não-tipada/ fracamente tipada */
$x = 1234;
echo "Número: $x <hr>";

/* caracteres de escape */
echo " Meu nome não é \"Jonny\" ";
echo ' Meu nome não é \'Jonny\' <hr>';

#Funções strings
echo strtoupper("converte em maiúscula")."<br>";
echo strtolower("CONVERTE EM MINÚSCULA"). "<br>";

echo ucwords("marinha do brasil") . "<br>";
echo ucfirst("a marinha do brasil") . "<br>";

echo substr("América", 1) . "<br>"; //mérica
echo substr("América", 1, 3) . "<br>"; //mé
echo substr("América", 0, -1) . "<br>"; //Améric
echo substr("América", -2) . "<hr>"; //ca

$empresa = " Hotel América ";
echo str_pad($empresa,22,"*") . "<br>";
echo str_pad($empresa,22,"*",STR_PAD_LEFT) . "<br>";
echo str_pad($empresa,22,"*",STR_PAD_BOTH) . "<hr>";

$simbolo = 'oo00oo';
echo str_repeat($simbolo, 5) . "<hr>";

$frase = "Qual é o doce mais doce que o doce?";
echo str_replace("doce","docinho",$frase) . "<hr>";

$posicao = strpos($frase, "doce");
if($posicao){
	echo "String encontrada na posição $posicao <hr>";
}else{
	echo "String não encontrada";
}

$senha = sha1("123");
echo "$senha <hr>";

$senha2 = md5("123");
echo "$senha2 <hr>";

#Números

$dec = 10.875453333;
echo number_format($dec, 2) . "<br>";

$nota = 8.78;
echo number_format($nota, 2, ",", null) . "<br>";

$salario = 10850.49;
echo number_format($salario, 2, ",", ".") . "<hr>";

#Math (Matemática)
echo pi() . "<br>";
echo sqrt(81) . "<br>";
echo pow(10, 5) . "<br>";
echo rand(0, 10) . "<br>";
echo ceil(1.001) . "<br>";














