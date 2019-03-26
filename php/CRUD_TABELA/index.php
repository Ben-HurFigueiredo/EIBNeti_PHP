<htm>
    
    <title>
        Sistema de Cadastro
    </title>
    
    <body>
        
<style>
    
    
    
    body{
        background-color:cadetblue;
            
    }
    
    
    h3{
        
        text-align: center;
        margin-top: 100px;
        
        
    }
    
    fieldset{
        
        
        
        text-align: center;
        padding-top: 20px;    
    }
    
    
    table{
        
        margin: auto;
        margin-top: auto;
        border: 1px solid;    
        width: 250px;
       
        
    }
    
    
    td{
        
        padding: 10px;
        text-align: center;
        
    }
    
    
    .textoAutentica{
        
        font-size: 18px;
        
    }
    
    
    
</style>

        
        <h3>SISTEMA PHP WEB ESTRUTURADO 1.0</h3>

<fieldset>
<form method="post" action="autenticar.php" >
    
    <table  >
        
        <tr >
            <th colspan="2" class="textoAutentica" clospan="2">
                Autentique-se!
            </th>
        </tr>
        
        <tr>
        <td colspan="2">
            Login: <input type="text" name="login" required maxlength="30">
                
        </td>                        
        </tr>
        
        <tr>
        <td colspan="2">
            
            Senha: <input type="senha" name="login" required maxlength="20">
            
        </td>
        </tr>
        
        <tr>
            
            <td>
                <input type="submit" value="Entrar">
            </td>

            <td>
                <input type="reset" value="Limpar">

            </td>
                  
        </tr>
        
            
    </table>
      
</form>
</fieldset>

    </body>
</htm>