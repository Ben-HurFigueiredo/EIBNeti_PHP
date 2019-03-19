<?php 

/* tipo booleano (true/false)*/

$exibir_campeao = true;

if($exibir_campeao){
	echo 'We are the champions <br>';
}else{
	echo 'Ninguém é campeão';
}

/* tipo número */

# inteiro
$ni = 1234;

#real
$nr = 12879.58;

/* tipo string */
$str_s = 'Isto é uma string';
$str_d = "Isto é uma string";

/* tipo array */
$array = array('Palio','Corsa','Golf');

/* tipo objeto */
$obj = new stdClass;


/* tipo recurso (resource) */
$ponteiro = fopen('tipos_variaveis.php',"r");
var_dump($ponteiro);

/* tipo NULL */
$nulo = null;

if(is_null($nulo)){
	echo 'valor é nulo <hr>';
}else{
	echo 'valor não é nulo <hr>';
}

/* constantes */
define("MAXIMO_CLIENTE","20000");
define("PI",3.1415);
define("DIAS_SEMANA",7);

echo MAXIMO_CLIENTE . ' clientes <br>';
echo PI . '<hr>';
echo DIAS_SEMANA . ' dias na semana <hr>';







