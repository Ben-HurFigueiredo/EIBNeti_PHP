<?php 



abstract class ClassePai{
     
     #Visibilidade sem restrições 
     
     protected $Atributo1;
     
     
     
     #Visibilidade sem restrições 
     protected function metodo1($var){
         
         $this->Atributo1 = $var;
     }    
     
 }


class ClasseFilha extends ClassePai{
    
    public function setAtributo1($var){
        $this->Atributo1 = $var;
         
    }
    
    
    protected function metodo1($var){
        
        parent::metodo1($var);
        
        
    }
    
}

$obj = new ClasseFilha();
$obj->SetAtributo1 = "valor ";
$obj->metodo1("valor");

echo $obj->Atributo1;



?>


