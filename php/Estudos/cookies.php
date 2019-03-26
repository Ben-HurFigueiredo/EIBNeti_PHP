<?php


#definindo cookies


setcookie("Login","Admin");
setcookie("Senha","admin123");



# definindo tempo de expiração da página

setcookie("Autenticado", true, time()+172800);





?>
<style>
    table{
        margin-left: auto;
        margin-right: auto;
        margin-top: auto;
        width: 40%;
        background-color: aqua;
        
    }
    .titulo{
        
        
    }
    
    
</style>



<table  border="1">
    <tr>
        
        <th colspan="2" class="titulo">Faça a sua Autenticação</th>
        
    </tr>
    
<form method="post">
    
        
    <tr>
        
        <td colspan="2">Login: <input type="text" name="login" required></td>
        
    </tr> 
    <tr>
        
        <td colspan="2">Senha: <input type="password" name="senha" required></td>
    </tr>    
        
    <tr>
            
        <td><input type="submit" value="Logar"></td>    
        <td><input type="submit" value="Logar"></td>    
    </tr>
        
        
        
   
</form>
    
    
</table>

<?php

    /* recuperamos os valores digitados nos campos */


$login = filter_input(INPUT_POST,"login");
$senha = filter_input(INPUT_POST,"senha");



/* Armazena em cookies os valores das variáveis */



setcookie("form_l",$login);
setcookie("form_s",$senha);



echo "Login digitado foi: " . filter_input(INPUT_COOKIE,"form_l")."<br>";
echo "A Senha digitado foi: " . filter_input(INPUT_COOKIE,"form_s")."<br>";

#* Verifica se o usuário foi identificado


if(filter_input(INPUT_COOKIE,"Autenticado")){
    
    
    echo "Usuário Autenticado!<hr>";
    
}else{
    
    echo "Usuário NÃO Autenticado!<hr>";
       
}


# Excluindo Cookies

setcookie("form_l",null);
setcookie("form_s",null);

//setcookie("Autenticado",null);





?>
