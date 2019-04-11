<?php


 include_once("Conecta.class.php");

class Pessoa extends Conecta{
    
    private $Nome;
    private $SobreNome;
    private $DataNascimento;
    private $Genero;
    
    
    
    protected $Tabela = "pessoa";
    
    
    #metodos setters e getters
    
    
    function setNome($nome){ $this->Nome =$nome;}
    function setSobreNome($sobreNome){ $this->Nome =$sobreNome;}
    function setDataNascimento($dataNascimento){ $this->DataNascimento =$dataNascimento;}
    function setGenero($genero){ $this->Genero =$genero;}
    
    function getNome(){ return $this->Nome;}
    function getSobreNome(){ return $this->SobreNome;}
    function getDataNascimento(){ return $this->DataNascimento;}
    function getGenero(){ return $this->Genero;}
    
    
    
    function inserir(){
        
        
        
        
        $stmt = Conecta::preparaSQL($sql);
        $stmt->bindValue(1, $this->getNome());
        $stmt->bindValue(2, $this->getSobreNome());
        $stmt->bindValue(3, $this->getDataNascimento());
        $stmt->bindValue(4, $this->getGenero());
        
        return $stmt->execute();
        
    }
    
    function selecionarTudo(){
        
        $sql = "SELECT * FROM $this->Tabela";
        
        $stmt = Conecta::preparaSQL($sql);
        
        $stmt->execute();
        
        return $stmt->fetchAll();
        
    }
    
    
    
    function selecionar($id){
        
        $sql = "SELECT * FROM $this->Tabela WHERE id = ?";
        
        $stmt = Conecta::preparaSQL($sql);
        
        $stmt->bindValue(1, $id);
        
        $stmt->execute();
        
        return $stmt->fetch();
          
    }
    
    function deletar($id){
        
        $sql = "DELETE FROM $this->Tabela WHERE id = ? ";
        
        $stmt = Conecta::preparaSQL($sql);
        $stmt->bindValue(1, $id);
       
        
       return $stmt->execute(); 
    }
    
    function atualizar($id){
        
        $sql = "UPDATE  $this->Tabela SET  nome=?, sobrenome=?, data_nascimento=?, genero=? WHERE id = ? ";
        
        
        $stmt->bindValue(1, $this->getNome());
        $stmt->bindValue(2, $this->getSobreNome());
        $stmt->bindValue(3, $this->getDataNascimento());
        $stmt->bindValue(4, $this->getGenero());
        $stmt->bindValue(5, $id);
        
        return $stmt->execute();
        
    }
}