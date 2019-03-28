<?php


 include_once ("../inc/config.php");



 $p1 = new Pessoa('Jonas', '32','89','179', 'Segundo Grau Incompleto', 'R$ 2650,98');



 echo $p1->exibir();

 
 $p1->alteraNome("Maria vai com as Outras");

 $p1->Envelhecer(1);
 
 $p1->Formar("Ensino Superior Incompleto");

 $p1->alteraSalario("4509.45");

 
 echo $p1->exibir();