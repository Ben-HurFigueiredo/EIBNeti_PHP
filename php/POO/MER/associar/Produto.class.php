<?php



class Produto{
    
    public $Codigo;
    public $Descricao;
    public $Fabricante;
    public $Quantidade;
    public $Fornecedor;
    
    
    
    function __construct($codigo, $descricao, $fabricante, $quantidade){
     
        $this->Codigo =$codigo;
        $this->Descricao =$descricao;
        $this->Fabricante =$fabricante;
        $this->Quantidade =$quantidade;
   
        
    }
    
}