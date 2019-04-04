<?php 



abstract class ClassePai{
     
     #Visibilidade acessada nessas classes */
     
     private $Atributo1;
     
     
     
     #Visibilidade sem restrições 
     private function metodo1($var){
         
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

$obj = new ClasseFilha();

$obj->SetAtributo1 = "valor";
$obj->metodo1("valor");


#echo $obj->Atributo1;



?>


