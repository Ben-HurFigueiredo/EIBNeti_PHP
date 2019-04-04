<?php 



class Cachorro{
    
    private $Nome;
    private $Nascimento;
    
    
    
    public function setNome($nome){
        
        $this->Nome = $nome;
        
    }
    
    public function __set($atributo, $valor){
        
        if($atributo == 'Nascimento'){
            
            #21/09/2019 formato valido
            if(count(explode("/",$valor)) == 3){
                
                echo "O valor $valor foi atribuido!";
                $this->$atributo = $valor;
                
            }else{
                
                echo "O Valor $valor não foi atribuido <hr>";
            }
            
        }else{
            
            $this->$atributo = $valor;
            
        }
        
        
    }

}

$toto = new Cachorro;

$toto->setNome("Totó");

$toto->Nascimento = "21 de outubro de 2009 ";

$toto->Nascimento = "21/08/2019";