<?php


include_once ("../inc/configHeranca.php");


$cliente1 = new ContaCorrente("9167","123.19","Ana","Abs123",0,1000);
$cliente2 = new ContaCorrente("9551","23.19","Bento","sbs123",0,1000);






echo $cliente1->abrirConta();
echo "Boa Noite $cliente1->Titular !";





 echo "<pre>";


  var_dump($cliente1,$cliente2);