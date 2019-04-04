<?php 


class Produto{
    
    private $Descricao;
    private $Preco;
    const MARGEM = 10;
    
    
    function __construct($descricao, $preco){
        
        $this->Descricao = $descricao;
        $this->Preco = $preco;
  
    }
    
    public function __get($atributo){
        
        if($atributo == 'Preco'){
            
            return $this->$atributo * (1 + (self::MARGEM /100));
            
        }
        
    }
}

$produto = new Produto("Curso de PHP", 1000);

echo $produto->Preco;


