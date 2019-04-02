<?php 


 include_once("Conta.class.php");


# A Classe filha Extende da classe Pai!

    class ContaCorrente extends Conta{
        
      var $Limite;
        
        
        
        
       function __construct($agencia, $numero, $titular, $senha, $saldo, $limite){
            # Override (sebrescrita)
            parent::__construct($agencia, $numero, $titular, $senha, $saldo);
            $this->Limite = $limite;
        }
       function abrirConta(){
           
           parent::abrirConta();
           
       }
       function Sacar($quantia){
         #polimorfismo
        if(($this->Saldo + $this->Limite) >= $quantia){
            
            parent::Sacar($quantia);

        }else{
            
            echo "Saldo + Limite são insuficientes <hr>";
        }
        
        
       }
       function Depositar($quantia){
           
           #polimorfismo
           if($quantia > 0 && $quantia <= 5000){
               
               #override
               parent::Depositar($quantia);
               
           }else{
               
               echo "Quantidade excede o limite por operação <hr>";
               
           }
       }
       function obterSaldo(){
           
           #override
           return parrent::obterSaldo();
           
       }
        
        
    }