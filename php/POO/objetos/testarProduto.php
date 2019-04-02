<?php


include_once("../inc/config.php");

$arroz = new Produto("c-001", "Arroz Tipo 1","Tio Jorge",100, 12.50);



print "<pre>";
var_dump($arroz);

print "</pre>";


echo $arroz->exibir();

$arroz->venderProduto(100);




$arroz->reporEstoque(1);
$arroz->alterarPreco(11.90);

echo $arroz->exibir();
