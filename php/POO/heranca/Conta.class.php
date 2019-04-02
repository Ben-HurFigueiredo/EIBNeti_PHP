<?php

# Esta classe nunca será instanciável pois é uma classe abstrato.S

 abstract class Conta {
     
     
     var $Agencia;
     var $Numero;
     var $Titular;
     var $Senha;
     var $Saldo;
     var $Cancelada;
     
     
     function __construct($agencia, $numero, $titular, $senha, $saldo){
         
         $this-> Agencia = $agencia;
         $this-> Numero = $numero;
         $this-> Titular = $titular;
         $this-> Senha = $senha;
         $this-> Saldo = $saldo;
         $this-> Cancelada = true;

         
     }
     function abrirConta(){
         
         if($this->Cancelada == true){
             
             
             echo "Abrir Conta!";
             $this->Cancelada = false;
             
             
         }else{
             
             echo "Conta Já Existente!!";
             
         }
          
         
     }
     function sacar($quantia){
         
         $this->Saldo -= $quantia;         
         
     }
     function depositar($quantia){
         
         $this->Saldo += $quantia;   
         
     }
     function obterSaldo(){
         
         return $this->Saldo;
     }

     
 }
