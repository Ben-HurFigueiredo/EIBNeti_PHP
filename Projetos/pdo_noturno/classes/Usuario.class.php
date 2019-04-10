<?php


    class Usuario extends Conecta{
        
        
        private $NomeCompleto;
        private $Login;
        private $Senha;
        private $IdAcesso;
        private $Tabela = 'usuario';
        
        
        
        function setNomeCompleto($nomeCompleto) {
            
            $this->NomeCompleto =$nomeCompleto;
        
        }
        
        function setlogin($login){
            
            $this->Login =$login;
            
            
        }
        
        function setSenha($senha){
            
            $this->Senha = $senha;
            
        }
        
        function setIdAcesso($idAcesso){
            
            $this->IdAcesso = $idAcesso;
            
        }
        
        function getNomeCompleto(){
            
            return $this->NomeCompleto;
            
        }
        
        function getLogin(){
            
            return $this->Login;
            
        }
        
        function getSenha(){
            
            return $this->Senha;
            
        }
        
        function getIdAcesso(){ 
            
            return $this->IdAcesso;
            
        }
        
        function inserir(){
        
        /*    
             $sql = $this->pdo->query("SELECT id FROM {$this->Tabela} WHERE id_acesso = '$this->getIdAcesso()'");
             
                    
         
         if($resultado->rowCount() > 0){
                 
            return false;
             
         }else{ 
             
             
         #$resultado = $this->pdo->query("INSERT INTO {$this->Tabela} (nome_completo,login,senha,id_acesso)values('$this->getNomeCompleto()','$this->getLogin()','$this->getSenha()','$this->getIdAcesso()')");
                  
            #return true;      
            
             
        
        */
            
            
            $sql= "INSERT INTO {$this->Tabela} (nome_completo,login,senha,id_acesso) VALUES(?,?,?,?)";

            $stmt = Conecta::PreparaSQL($sql);

            $stmt->bindValue(1, $this->getNomeCompleto());
            $stmt->bindValue(2, $this->getLogin());
            $stmt->bindValue(3, $this->getSenha());
            $stmt->bindValue(4, $this->getIdAcesso());


            return $stmt->execute();

        }
        
        function Atualizar($id){
            
            
            $sql = "UPDATE {$this->Tabela} SET nome_completo = ?, login = ?, senha = ?, id_acesso = ? WHERE id = ?";
           
            $stmt = Conecta::Prepara($sql);

            $stmt->bindValue(1, $this->getNomeCompleto());
            $stmt->bindValue(2, $this->getLogin());
            $stmt->bindValue(3, $this->getSenha());
            $stmt->bindValue(4, $this->getIdAcesso());
            $stmt->bindValue(5, $id());

            
            return $stmt->execute();
            
        }
        
        public function selecionarTudo(){
            
            
            $sql = "SELECT * FROM {$this->Tabela}";
            
            $resultado = Conecta::PreparaSQL($sql);
            
            $resultado->execute();
            
            return $stmt->fetchAll();
            
        }
        
        function Selecionar($id){
            
            
          $sql = "SELECT * FROM {$this->Tabela} Where id= ?";
            
            $resultado = Conecta::PreparaSQL($sql);
            
            $resultado->bindValue(1, $id);
            
            $resultado->execute();
            
            return $stmt->fetch();    
            
        }
        
        public function Deletar($id){
            
            $sql = "DELETE FROM {$this->Tabela} WHERE id = ?";
            
            $res = Conecta::PreparaSQL($sql);
            
            $res->bindValue(1, $id);
            
            return $res->execute();
            
        }
        
        
    }