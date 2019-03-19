<?php

#Criando arrays[]

$cores = array("Azul","Amarelo","Rosa","Lilás");
$jogos = array(0 => "Super Mário World",1 => "Mortal Kombat",
2 =>"Prince of Persia");

$nomes[0] = "Jéssica Alba";
$nomes[1] = "Vin Diesel";
$nomes[2] = "Sandra Bullock";
$nomes[3] = "Robert Downey Jr";

#Acessando arrays
echo $cores[2] . "<br>";
echo $jogos[0] . "<br>";
echo $nomes[3] . "<hr>";

#Criando arrays associativos
$hex = array("vermelho" => "#FF0000","verde" => "#00FF00",
"azul" => "#0000FF");

$pessoa["nome"] = "Letícia de Souza";
$pessoa["idade"] = 33;
$pessoa["rua"] = "São João";
$pessoa["bairro"] = "Cidade Alta";
$pessoa["cidade"] = "Porto Alegre";

#Acessando arrays
echo $hex["verde"] . "<br>";
echo $pessoa["bairro"] . "<hr>";

#criando iterações
$fruta = array("cor"=>"vermelha","sabor"=>"doce","formato"=>"redonda","nome"=>"maçã");

foreach($fruta as $chave => $valor){
	echo "$chave : $valor <br>";
}
echo "<hr>";
#Acessando arrays e realizando operações
$minha_multa["carro"] = "Fiat";
$minha_multa["valor"] = 195.80;

$minha_multa["carro"] .= " Argo";
$minha_multa["valor"] += 100;

echo $minha_multa["carro"] . "<br>";
echo $minha_multa["valor"] . "<hr>";

$comidas[0] = "Lasanha";
$comidas[1] = "Pizza";
$comidas[2] = "Macarrão";

$comidas[1] .= " Calabresa";

echo "<pre>";
var_dump($comidas[1]) ."<hr>";

#Arrays multidimensionais
$veiculos = array(
	"Palio" => array(
		"ano" => "2018",
		"cor" => "azul",
		"potência" => "1.0"
	),
	"Gol" => array(
		"ano" => "2019",
		"cor" => "branco",
		"potência" => "1.6"
	),
	"Golf" => array(
		"ano" => "2018",
		"cor" => "preto",
		"potência" => "2.0"
	)
);
#Criando iterações em array multidimensional
// foreach($array as $key => $value){ ... }
foreach($veiculos as $modelo => $valor){
	echo "=> Modelo: $modelo <br>";
	foreach($valor as $caracteristica => $valor2){
		echo "$caracteristica: $valor2 <br>";
	}
}

#array_push -> adiciona elementos no final de um array 
$a = array("vermelho","amarelo","azul");
array_push($a, "lilás","roxo");
print_r($a);

#array_pop -> remove um elemento do final de um array 
array_pop($a);
print_r($a);

#array_shift -> remove o elemento do início de um array 
array_shift($a);
print_r($a);

#array_unshift -> adiciona elemento no início de um array 
array_unshift($a,"laranja");
print_r($a);

#array_pad -> preenche array com o valor, na quantidade de posições informadas
$cli = array("Rogério","Marta","Carlos");
$cli = array_pad($cli, 6, "Luiza");
print_r($cli);

#array_reverse -> retorna array na ordem reversa
$num[0] = 1;
$num[1] = 2;
$num[2] = 3;
$num[3] = 4;
$rev = array_reverse($num, TRUE);
print_r($rev);

#array_merge -> mescla dois ou mais arrays
$times_paulistas = array("São Caetano","Santo André");
$times_cariocas = array("América","Bangú");
$times_juntos = array_merge($times_paulistas, $times_cariocas);
print_r($times_juntos);

#array_keys -> retorna as chaves/índices de um array
$aluno = array("matricula"=>"012","nome"=>"Liliane","idade"=>14);
$indices = array_keys($aluno);
print_r($indices);

#array_values -> retorna os valores de um array
$valores = array_values($aluno);
print_r($valores);

#array_slice -> extrai uma porção de um array 
$color = array("green","yellow","blue","gray","purple",
"white","black");
$fatia = array_slice($color, 2, 4);
print_r($fatia);

#count -> retorna o comprimento de um array (elementos)
$bebidas = array("suco","agua","refrigerante","vinho","vodka","cerveja");
echo "O comprimento do array é ".count($bebidas)."<hr>";

#in_array -> verifica se um array possui um determinado valor 
if(in_array("café",$bebidas)){
	echo "Café foi encontrado <hr>";
}else{
	echo "Café não foi encontrado <hr>";
}

#sort -> ordena array pelo valor, não mantém associação de índices
sort($bebidas);
print_r($bebidas);

#rsort -> ordena array na ordem reversa valor, não mantém associação de índices
rsort($bebidas);
print_r($bebidas);

#asort -> ordena array pelo valor, mantém a associação de índices 
asort($bebidas);
print_r($bebidas);

#ksort -> ordena array pelos seus índices. krsort()
$automovel["potência"]= "1.0";
$automovel["cor"]= "branco";
$automovel["modelo"]= "celta";
$automovel["opcionais"]= "desembaçador traseiro"; 
ksort($automovel);
print_r($automovel);

#explode -> converte uma string em um array, utilizando um identificador
$data = (string) "15/03/2019";
$dataArray = explode("/",$data);
print_r($dataArray);

#implode -> converte um array em uma string, utilizando um delimitador
$cli = array("Denise","Valdir","Jubiraldina","Emenergilda");
echo implode(", ",$cli);



































