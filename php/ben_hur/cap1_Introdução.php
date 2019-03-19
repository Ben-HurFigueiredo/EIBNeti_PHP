<?php

/* PHP não é uma linguagem não case sensitive, pois ele diferencia de letras
     maiúsculas e minusculas.
*/

# -> Comentário de Uma Linha
// -> Comentário de uma linha também.

/**  Documentário desse arquivo */ 


     $variavel ='';
 
     echo $variavel .'<br>';
     echo '<h1> Olá mundo </h1>';

     var_dump  ('abc'.$variavel);
     echo "<br>";
     print_r  ($variavel);
     echo '<hr><br>';
     $carros= array('Belina', 'Variante', 'Brasília');
    
     foreach($carros as $carro){
         
         echo $carro.'<br>';
         
     }

 
     var_dump ($carros);

     echo '<hr>';

     # Variável da Variante;  
   
     $var = 'nome';
     $$var = 'João';

     echo $nome;

     echo '<hr>';

     $a = 5;
     $b = $a;
     $b = 10;

     echo '$a vale ' . $a. ' $b vale '. $b . '<br><br>';

    
    $c = 5;
    $d = &$c;
    $c = 10;

    echo 'Valor da $d vale '. $d . '  Valor de $c vale'. $c . '<br>';
    echo "Variável $d"; # pecebe se essa diferença de uma aspa e duas???


    #Tipos de Variáveis
    
    echo "<br><br><hr>";

    $exibir_campeao = 'true';


    if(!$exibir_campeao){
        
       echo 'Whe are chapions';
        
    }else{
        
       echo 'Nobody is champion';       
        
    }



    echo "<br><br><hr>";
    
    print_r ('/* tipo numero */'.'<br>');

    
     print_r ('/* tipo inteiro */'.'<br>');

     $ni = 1234;
     
     print_r ('/* tipo inteiro */'.'<br>');
     
     $nr = 123.34;
   
     print_r ('/* Tipo Objeto */'.'<br>');

    
    class Departamentos {
        
        var $secao;
        
        
        function alocar(){
            
            echo "Departamento : $this->secao";
        }
        
    }

   //$obj = new stdClass;
   $obj = new Departamentos;

   $obj ->secao = "Contabilidade";
   echo $obj -> alocar();

   print_r ('/* tipo resurces */'.'<br>');

   
   $ponteiro = fopen('arquivo.php', "r");

   var_dump ($ponteiro);

   echo "<br><br><hr>";

   $nulo = NULL;

   if(is_null($nulo)){
       
       echo  'A váriavel $nulo é nullo';
   }


   echo "<br><br><hr>";
   print_r ('/* Constantes */'.'<br>');


   define("PI",'3.1415');
   define ("DIAS_DA_SEMANA",'7');

   echo PI. '<br>';

   echo DIAS_DA_SEMANA;


?>

