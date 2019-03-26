<?php

   require_once 'conecta.php';


$id = filter_input(INPUT_GET,"id");
       

$query = "DELETE FROM pessoa where id='$id'";


if(mysqli_query($conn, $query)){
    
    echo "<script> return mensagem() window.alert('Registro Excluido'); </script>";
    
    
    
}else{
    
    echo ' Erro !';
    
}


?>

  
    <script>
        
        function mensagem(){
            
            window.alert('Registro Excluido');
            history.back='select.php';
            
            return true;
        
        }
    </script>    