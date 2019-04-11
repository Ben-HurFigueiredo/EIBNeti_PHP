<h3>Inserir</h3> 


<form method="post" action="">
    
    Nome <br>
    <input type="text" name="nome"> <br><br>
    
    Sobrenome <br>
    <input type="text" name="sobrenome"> <br><br>
    
    Data Nascimento <br>
    <input type="date" name="data"> <br><br>
    
    Genero <br>
    <input type="radio" name="genero" value="M"> Masculino
    <input type="radio" name="genero" value="F"> Feminino <br><br>
    <input type="submit" value="Inserir" name="insere">
    
</form>


<?php

    include_once("Pessoa.class.php");
    
    $pessoa =new Pessoa;

    $nome   = filter_input(INPUT_POST, "nome");
    $sobreNome   = filter_input(INPUT_POST, "sobrenome");
    $data   = filter_input(INPUT_POST, "data");
    $genero   = filter_input(INPUT_POST, "genero");

    
    $pessoa->setNome($nome);
    $pessoa->setSobreNome($sobreNome);
    $pessoa->setDataNascimento($data);
    $pessoa->setGenero($genero);

    if(filter_input(INPUT_POST,"insere")){
        
        if($pessoa->inserir()){
            
            echo "Registro Inserido!";
        }
    }