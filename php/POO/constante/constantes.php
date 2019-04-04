<?php 


 class Biblioteca{
     
     #constante
     
     const NOME = " Gnome ";
     
     
     
     
 }


class Aplicacao extends Biblioteca{
    
    
    const AMBIENTE = "Ubuntu ";
    const VERSAO = "12.0";
    
    
    function   __construct($app){
        
        echo "Biblioteca: " . Biblioteca::NOME . "<br> Ambiente: " .
             self::AMBIENTE . "<br> Versão: " . self::VERSAO. "<br> App:
        $app <hr>";
        
        
    }
    
    
}

new Aplicacao("Gimp");
new Aplicacao("Abiword");
new Aplicacao("LibreOffice");



