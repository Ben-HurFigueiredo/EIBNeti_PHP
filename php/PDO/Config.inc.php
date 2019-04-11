<?php



function __autoload($classe){
    
    
    if (file_exists("$classe.class.php")){
        
        
        include_once "$classe.class.php";
        
    }else{
        
        
        print "Não foi possivel carregar a classe $classe <hr>";
        
        
        
    }
    
    
    
}