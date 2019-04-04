<?php 



class ClassePai{
     
     #Visibilidade sem restrições 
     
     public $Atributo1;
     
     
     
     #Visibilidade sem restrições 
     function metodo1($var){
         
         $this->Atributo1 = $var;
     }    
     
 }


class ClasseFilha extends ClassePai{
    
    public function setAtributo1($var){
        $this->Atributo1 = $var;
         
    }
    
    
    public function metodo1($var){
        
        parent::metodo1($var);
        
        
    }
    
}

$obj = new ClassePai();
$obj->Atributo1 = "valor ";
$obj->metodo1("valor");

echo $obj->Atributo1;



?>




