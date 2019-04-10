<?php 

    class Acesso extends Conecta{
        
        private $Descricao;
        protected $Tabela = 'acesso';
        
        
        function setDescricao($descricao){
            
            $this->Descricao = $descricao;
        }
        
        
        
        function getDescricao(){
            
            return $this->Descricao;
        }
        
        
        function selecionarTudo(){
            
            
            $sql = "SELECT * FROM {$this->Tabela}";
            $conecta = Conecta::prepara($sql);
            $conecta->execute();
            
            return $conecta->fetchAll();
        
        
        }
                
    }