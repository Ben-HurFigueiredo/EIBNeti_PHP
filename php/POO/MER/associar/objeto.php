<?php 


#inclui as classes
include_once("Produto.class.php");
include_once("Fornecedor.class.php");


$fornecedor = new Fornecedor("00.000.000/0001-00","Bom Gosto Alimentícios LTDA","Rua Jorge Amaro Nº 23 Loja 155","São Paulo");



$produto = new Produto("C-001","Arroz Tipo 1","Camil",100);
$produto->Fornecedor = $fornecedor; //associação



echo "<pre>";
var_dump($produto);