<?php 


abstract class Vendedor{
    
    
    static $Nome; 
    static $Salario;
    
    
    static function setVendedor($nome, $salario){
        
        self:: $Nome = $nome;
        self:: $Salario = $salario;
    
    }
    
    static function getVendedor(){
        
        return "Nome: " . self::$Nome . " - Salário: " . self::$Salario . "<hr>";
        
    }
    
}
    # nomeDaClasse :: nomeDoMetodo 
    
    Vendedor::setVendedor("Laura Moura", 4300);   
    echo Vendedor::getVendedor();
    
    Vendedor::setVendedor("Gilberto Amaral", 3100);   
    echo Vendedor::getVendedor();
    
    