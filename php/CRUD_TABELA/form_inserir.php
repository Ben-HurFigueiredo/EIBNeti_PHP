<?php

  session_start();

#Verifica se o usuário não está logado!


if(!$_SESSION["logado"]){
    
    echo "<script>";
    echo "alert('Sem Permissão de Acesso, Favor Efetue o Login!)";
    echo "location='index.php";
    echo "</script>";
    
}

#verifocar se o logout é igual ao ok

if(filter_input(INPUT_GET,"logout") == "ok"){
    
    session_destroy();
    header("location:index.php");
    
}




?>

<style>
    
    span{
        font-weight: bold;
    }
    
    
</style>



<hr>
<span><?= $_SESSION["usuario"]?></span>, Seja Bem Vindo(a) ao Nosso Sistema Web.



  &nbsp;
  &nbsp;
  &nbsp;
 <a href="?logout=ok" 
    onclick="return confirm('Deseja Sair?)">Sair do sistema</a>

<hr>

<h3> Cadastro de Clientes</h3>

<form method="post" action="banco/insert.php">
    
    Nome:<br>
    <input type="text" name="nome" required maxlength="20"><br>
    Sobrenome:<br>
    <input type="text" name="sobrenome" required maxlength="20"><br>
    Data Nascimento:<br>
    <input type="date" name="data" required><br>
    Gênero <br>
    <select name="genero">
        <option disabled selected></option>
        <option value="M">Masculino</option>
        <option value="F">Feminino</option>
    </select><br>
    Estado Civil <br>
    <input type="radio" name="es" value="Solteiro(a)">Solteiro(a)
    <input type="radio" name="es" value="Casado(a)">Casado(a)
    <input type="radio" name="es" value="Divorciado(a)">Divorciado(a)
    <input type="radio" name="es" value="Viuvo(a)">Viúvo(a)
    <input type="submit" value="Inserir">
    
</form>


<?php





?>