<?php

   require_once 'banco/conecta.php';


$id = filter_input(INPUT_GET,"id");
       

$query = "DELETE from pessoa where id='$id'";


if(mysqli_query($conn, $query)){
    
    echo "<script>mensagem() window.alert('Registro Excluido'); </script>";
    
    
    
}else{
    
    echo ' Erro !';
    
}


?>

  
    <script>
        
        function mensagem(){
            
            window.alert('Registro Excluido');
            history.back='select.php';
        
        }
    </script>    