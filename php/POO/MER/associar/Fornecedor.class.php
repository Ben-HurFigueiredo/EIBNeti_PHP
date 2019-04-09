<?php



    class Fornecedor{
        
        public $CNPJ;
        public $RazaoSocial;
        public $Endereco;
        public $Cidade;
        
        
        function __construct($cnpj, $razaoSocial, $endereco, $cidade){
            
            $this->CNPJ = $cnpj;
            $this->RazaoSocial = $razaoSocial;
            $this->Endereco = $endereco;
            $this->Cidade = $cidade;
            
            
            
        }
  
    }