<?php



# Método de Sobrecarga ( Arregamento automático)



function __autoload($classe){
    
    #Inclui as classes
    
    include_once ("../heranca/$classe.class.php");
    
    
}