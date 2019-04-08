<?php


/* constantes que armazenam os paramentros de config */

define("HOST","localhost");
define("USER","root");
define("PASS","");
define("PORT","3306");
define("DBNAME","php_integrado");



#estabelece conexam com o servidor

$conn = mysqli_connect(HOST,USER,PASS, NULL, PORT,NULL) or die(mysqli_error());

try{
       
    mysqli_select_db($conn,DBNAME) or die(mysqli_error());
    
    
}catch(Exception){
    
    echo "Não Conectado!";
    
}




?>