<?php 



 class Curso{
     
     public $Sigla;
     public $Descricao;
     public $Duracao;
     public $Preco;
     
     
     #atribui valores
     
     
     function setCurso($sigla, $descricao, $duracao, $preco){
         
         $this->Sigla =$sigla;
         $this->Descricao =$descricao;
         $this->Duracao =$duracao;
         $this->Preco =$preco;
         
     }
     
     #recuperavalores
     
     function getCurso(){
         
         return "Sigla: $this->Sigla <br>
                Descricao: $this->Descricao <br>
                Duração: $this->Duracao h/a <br>
                Preço: $this->Preco <hr>";
         
     }
    
 }