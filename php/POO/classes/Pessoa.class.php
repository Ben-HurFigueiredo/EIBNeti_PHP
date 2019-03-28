<?php


class Pessoa{
    
    var $Nome;
    var $Idade;
    var $Peso;
    var $Altura;
    var $Escolaridade;
    var $Salario;
    
    
    /* Método Especial que define o comportamento
      inicial do Objeto */
    
    
    function __construct($Nome, $Idade, $Peso, $Altura, $Escolaridade, $Salario){
        
        $this->Nome =$Nome;
        $this->Idade =$Idade;
        $this->Peso =$Peso;
        $this->Altura =$Altura;
        $this->Escolaridade =$Escolaridade;
        $this->Salario =$Salario;
        
    }
    
    
    function alteraNome($Nome){
        $this->Nome = $Nome;
        
        
    }
    function Envelhecer($anos){
        $this->Idade = $anos;
        
        
    }
    function alteraPeso($quilogramas){
        $this->Peso = $quilogramas;
        
        
    }
    function Crescer($centimetros){
        $this->Altura = $centimetros * 0.01;
        
        
        
    }
    function Formar($titulacao){
        $this->Escolaridade = $titulacao;
        
    }
    function alteraSalario($Valor){
        $this->Salario = $Valor;
             
        
    }
    function Exibir(){
        
        
        return "Nome: $this->Nome <br>
                Idade: $this->Idade <br>
                Peso: $this->Peso <br>
                Altura: $this->Altura <br>
                Escolaridade: $this->Escolaridade <br>
                Salário: $this->Salario <hr>";
    }
    
    
    
    
    function __destruct(){
        
        echo "O Objeto <strong><u>$this->Nome</u></strong> foi finalizado... <hr>";
        
        
    }
    
}



