<?php

function __autoload($classe){
    
    
    if (file_exists("$dir/$classe.class.php")){
        
        
        include_once "$dir/$classe.class.php";
        
    }else{
        
        
        print "Não foi possivel carregar a classe $classe <hr>";
        
        
        
    }
    
    
    
}