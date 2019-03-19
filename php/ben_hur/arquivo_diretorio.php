<html>
    
    <title>
        
        
    </title>
    <body>
        
        
        

<h3> Envio de Arquivos</h3>

<form onsubmit="mensagem()" method="post" action="upload.php" enctype="multipart/form-data">
    
    <input type="file" name="arquivo" required>
    <input type="submit" value="Upload" >
    
      
</form>

    <script>
        
        function mensagem(){
            
            window.alert("Arquivo Enviado Com Sucesso!");
            
            return true;
        }

        
        
    </script>


    </body>
    
</html>

