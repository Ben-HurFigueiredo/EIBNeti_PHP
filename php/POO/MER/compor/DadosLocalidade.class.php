<?php

    class DadosLocalidade{
        
        public $Cidade;
        public $UF;
        public $Email;
        public $Telefone;
        
        
        function setLocalidade($cidade,$uf, $email, $telefone){
            
            $this->Cidade = $cidade;
            $this->UF =$uf;
            $this->Email =$email;
            $this->Telefone =$telefone;
            
        }
        
        function getLocalidade(){
            
            return "Cidade: $this->Cidade <br>
                    UF: $this->UF <br>
                    Email: $this->Email <br>
                    Telefone: $this->Telefone <hr>";
                
        }
        
    }

