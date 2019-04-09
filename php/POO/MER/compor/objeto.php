<?php 
     
     #inclui_once

include_once("DadosLocalidade.class.php");
include_once("DadosPessoais.class.php");



#instanciar classe


$pessoa = new DadosPessoais;


$pessoa->setPessoa("102.345.546-55","Augusto",25);
$pessoa->setLocalidade("Brasília","DF","guto@gmail.com","61 9 92810-9021");

echo $pessoa->getPessoa();
echo $pessoa->getlocalidade();




echo "<pre>";
    
    var_dump($pessoa);

