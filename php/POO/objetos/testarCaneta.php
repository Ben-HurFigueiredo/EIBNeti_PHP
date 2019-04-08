<?php

include_once ("../classes/Caneta.class.php");



$teste1 = new Caneta();



#passar valores para os atributos

$teste1->Modelo = "Bic";
$teste1->Cor = "Azul";
$teste1->Ponta = "0.5";
$teste1->Carga = "100";
$teste1->Tampada = true;


echo $teste1->Escrever();
echo $teste1->Tampar();
echo $teste1->Destampar();



#echo "A caneta modelo é $teste1->modelo ";


  echo "<pre>" ;

 var_dump ($teste1);


