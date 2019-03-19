<?php

#função date() -> retorna a data atual, parâmetro o formato da data

$dataEUA = date("m-d-Y");
$dataBR  = date("d/m/Y");
$dataBD  = date("Y-m-d");

echo "$dataEUA <br>";
echo "$dataBR <br>";
echo "$dataBD <hr>";

//retorna o tipo de dados de uma variáveis gettype()
echo gettype($dataEUA)."<hr>";

#função date() -> retorna a hora atual, parâmetro o formato da hora
$agora = date("H:i:s");
echo "Hora Atual: $agora <hr>";

#parâmetros utilizados com a função date()
//d - retorna o dia do mês com 2 dígitos
echo date("d") . "<br>";
//d - representa o dia do mês sem utilizar dígito 0
echo date("j") . "<br>";
//D - representa o dia da semana utilizando 3 caracteres
echo date("D") . "<br>";
//N - representa o dia da semana numericamente (0-6)
echo date("N") . "<br>";
//z - representa o dia do ano numericamente (0-365)
echo date("z") . "<hr>";

//F - representa o mês utilizando texto completo
echo date("F") . "<br>";
//m - representa o mês numericamente utilizando dígito 0
echo date("m") . "<br>";
//M - representa o mês utilizando 3 caracteres
echo date("M") . "<br>";
//n - representa o mês sem utilizar dígito 0
echo date("n") . "<br>";
//t - representa o número de dias do mês
echo date("t") . "<hr>";

#Timezone 
//retorna o timezone corrente 
echo "Timezone Atual: " . date_default_timezone_get() . "<br>";
//definimos um timezone 
date_default_timezone_set("America/Sao_Paulo");
echo "Horário de Brasília: ".date("H:i:s") . "<br>";
//date_default_timezone_set("Asia/Tokyo");
//echo "Horário de Tókio: ".date("H:i:s") . "<hr>";

#Objeto DateTime
//converte uma String (válida) em objeto
$strData = "2019-03-15";
$objData = date_create($strData);
echo "<pre>";
var_dump($objData) . "<br>";
//define um formato de data no objeto DateTime
$atual = date_format($objData, "d/m/Y");
echo "$atual <hr>";





