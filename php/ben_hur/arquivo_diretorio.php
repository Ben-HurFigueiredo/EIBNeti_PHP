<html>
    
    <title>
        
        
    </title>
    <body>
        
        
        

<h3> Envio de Arquivos</h3>

<form method="post" action="upload.php" enctype="multipart/form-data">
    
    <input type="file" name="arquivo" required>
    <input type="submit" value="Upload" onclick="mensagem()">
    
      
</form>

    <script>
        
        function mensagem(){
            
            window.alert("Arquivo Enviado Com Sucesso!");
        }

        
        
    </script>


    </body>
    
</html>


<?php














?>