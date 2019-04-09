<?php 

    class DadosPessoais{
        
        public $CPF;
        public $Nome;
        public $Idade;
        public $Localidade;
        
        
        #Instancia Objetos do tipo DadosLocalidade
        
        
        function __construct(){
            
            $this->Localidade = new DadosLocalidade;
        }
        
        function setPessoa($cpf, $nome, $idade){
            
            $this->CPF =$cpf;
            $this->Nome =$nome;
            $this->Idade =$idade;
                
        }
        
        function getPessoa(){
            
            return "Nome: $this->Nome <hr>";
            
        }
        
        function setLocalidade($cidade,$uf, $email, $telefone){
            
            #delega o Método
            $this->Localidade->setLocalidade($cidade,$uf, $email, $telefone);
            
            
        }
        
        function getLocalidade(){
            
            # delega o Método
            return $this->Localidade->getLocalidade();
        }
        
    }

