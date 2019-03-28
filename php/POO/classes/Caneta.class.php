<?php


 class Caneta{

     #atributos
     
     var $Modelo;
     var $Cor;
     var $Ponta;
     var $Carga;
     var $Tampada;
     
     #metodos
     
     function Tampar(){
         
         if($this->Tampada == false){
             
             $this->Tampada = true;
             
         }else{
             
             
             echo "Ei! Já estou Tampada! <hr>";
             
         }
         
         
     }
     function Destampar(){
         
         if($this->Tampada == true){
             
             $this->Tampada = false;
             
         }else{
             
             
             echo "Ei! Já estou Destampada! <hr>";
             
         }
         
     }
     function Escrever(){
         
         if($this->Tampada == false && $this->carga > 0){
             
             echo "Estou Escrevendo... <hr>";
         }else{
             
             
             echo "Não estou Escrevendo <hr>";
             
         }
         
     }
     
          
      
 }
























