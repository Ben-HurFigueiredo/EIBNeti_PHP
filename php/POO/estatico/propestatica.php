<?php 




class Cliente{
    
    
    # atributo estático
    
    
    
    
    static $Contador;
    
    
    
    function  __construct($nome){
        
        self::$Contador++;
        echo "Cliente nº ". self::$Contador . ": $nome <br>";
        
    }
    
    
}

    new Cliente("Emenergilda");
    new Cliente("Astrubal");
    new Cliente("Josilda");
    new Cliente("Meisascu");
    new Cliente("João");