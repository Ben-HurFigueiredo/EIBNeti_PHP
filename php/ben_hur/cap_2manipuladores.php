<?php


   


/* Variáveis Globais */

$total = 0;

function km2mi ($quilometros){
    
    
    global $total;
    $total += $quilometros;
    
    return $quilometros * 0.6;
}

echo 'Percorreu '. km2mi(100). ' milhas <br>';
echo 'Percorreu '. km2mi(200). ' milhas <br>';
echo 'Percorreu '. km2mi(300). ' milhas <br><br>';
echo 'Percorreu no total de '. $total . ' milhas. <hr><br>';

/* Variáveis Estáticas */

function contaCliente($nome){
    
    
    static $contador;
    $contador++;
    
    return "Cliente nº $contador: $nome <br><br>";
    
}

echo contaCliente('Mariana Silva');
echo contaCliente('Pedro Andrade');
echo contaCliente('Gustavo Damas');

echo "<hr>";


/* Passagem de Parâmetros (Por Valor) */


function incrementByValue($variavel, $valor){
    
    return $variavel += $valor;
}

$a = 5;

echo incrementByValue($a, 15) . "<br>";

echo "$a <hr>";

/* Passagem de Parâmetros (Por Referencia) */

function incrementByReference(&$variavel, $valor){
    
    return $variavel += $valor;
}

$b = 5;

echo incrementByReference($b, 15) . "<br>";
echo "$b <hr>";


function ola(){
    
    $argumentos =func_get_args();
    $quantidade =func_num_args();
    
    for ($i=0; $i < $quantidade; $i++){
        
        echo "Olá $argumentos[$i] <br> ";
        
    }
    
}

ola("Raimundo", "Paula", "Enzo", "Gabriel", " Souza");


echo "<br><hr>";


/* Recursividade */


function fatorial($numero){
    
    if($numero == 0 || $numero == 1){
        
        return 1;
        
    }else{
        
        return $numero * fatorial($numero - 1);
    }
    
    
}

echo fatorial(1). "<hr>";
    
echo "<h3> Strings</h3>";    


#Strings


$str = "isto é uma string";
$str = 'isto é uma string';

$fruta = "Maçã";

echo "$fruta <br>";
echo '$fruta <br>';

/*
$texto <<<CHAVE

  Este é Um texto 
  Utilizando várias linhas
     do
      texto.
      
CHAVE;      
*/



echo $fruta . ' é a fruta de Adão. <br>';
echo "$fruta . ' é a fruta de Adão.";


echo"<br><br><hr>";



class Pessoas{
    
    private $nome;
    
    function getNome(){
        
        return $this->nome;
        
    }
    function setNome($nome){
        
        $this->nome = $nome;
    }
}


$obj = new Pessoas();

    $obj->setNome("Jonas Cilada");
    
    echo $obj->getNome();

echo'<br>';

echo substr("America",-2);
    
echo "<br>";


$empresa = "Hotel América";


echo str_pad($empresa,25,"*",STR_PAD_BOTH). "<br>";


$simbolo = "ooo00ooo";

echo str_repeat($simbolo, 5) . "<hr>";

$frase = " Qual é o doce mais doce que o doce";

echo '<h5> sha1 e md5 <h5><br>';


echo 'Criptografia (40 caracteres sha1): ' . sha1("123"). "<br><br>";
echo 'Criptografia (36 caracteres md5): ' . md5("123"). "<br><br>";


echo '<h4> Números <h4><br>';


$salario = 1340345.80906997;

echo "R$ ". number_format($salario, 2,",", "."). "<br>";
    
echo pi()."<br>";
echo sqrt(81)."<br>";
echo pow(10,5)."<br>";
echo rand(1,50)."<br><br>";
echo ceil(1.01)."<br>";
echo ceil(1.00)."<br>";
    
    



        




?>









