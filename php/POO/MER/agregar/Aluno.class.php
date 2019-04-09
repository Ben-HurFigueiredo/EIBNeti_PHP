<?php 


    class Aluno{
        
        
        public $Matricula;
        public $Nome;
        public $Idade;
        public $Curso; //agregacao
        
        function setAluno($matricula,$nome, $idade){
            
            $this->Matricula =$matricula;
            $this->Nome =$nome;
            $this->Idade =$idade;
                   
        }
        
        
        #Método agrega Cursos
        function adicionaCurso(Curso $curso){
            
            $this->Curso[] = $curso;

        }
        
        #exibeCursos - método get curso
        
        function exibeCursos(){
            
            #laco percorre todo o array
            foreach($this->Curso as $curso){
                              
                echo $curso->getCurso();
                
            }
            
        }
        #calculaTotal -pegar atributo Preco
        function calculaTotal(){
            $total = 0;
            
            #laço percorre todo o array
            foreach($this->Curso as $curso){
                
                $total +=$curso->Preco;
            }
            return "Valor Total: $total <hr>";
        }
        
        
        
    }