<?php 

$nome = 'Leonardo';
$sobrenome = ' DiCaprio';

echo $nome.$sobrenome.'<hr>';

$variavel = 'nome';
$$variavel = 'Sara';

echo $nome.'<hr>';

$a = 5;
$b = $a;
$a = 10;

echo "variável b vale $b <br>";

$c = 5;
$d = &$c;
$c = 10;

echo "variável d por referência $d <br>";

