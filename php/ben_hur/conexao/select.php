<?php
require_once 'banco/conecta.php';


$query = "SELECT * FROM pessoa ORDER BY id DESC";
$result = mysqli_query($conn,$query) or die ("ERRO!");


?>


<html>
    <title>
    <meta>
        
    </title>
    <style>
        body{
            background-color:cadetblue;
            
        }
        
        h1{
           margin-top: 20px;
            text-align: center;
            
            
        }
        table{
            
            margin: auto;
            margin-top: auto;
            border: 1px;
            
            width: 600px;
            
        }
        td{
            
            text-align: center;
            
            
            
        }
        .title{
            
            
            font-size: 22px;
        }
        
        .mensagemRegistro{
            
        
        height: 40px;    
            
            
        }
        .nomeDados{
            
            background-color: black;
            color: aliceblue;        
            
        }
        
        
        
    </style>
    
    
    
    <body>
        <h1>Listando a Tabela</h1>
        <hr noshade>
        
   <div id="esquerda">
       
        <table border="1 solid; #000000">
            
            <tr>
                <th class="title" colspan="6">Dados Pessoais</th>               
            </tr>
               
            <tr class="nomeDados">
                <th >Nome</th>
                <th>Sobrenome</th>
                <th>Data de Nascimento</th>
                <th>Gênero</th>
                <th>Estado Civil</th>
                <th> </th>
                
            </tr>
                    
                <?php 
                    
                   while ($array = mysqli_fetch_object($result)){
                    $dataBD = date_create($array->data_nascimento); 
                    $dataBR = date_format($dataBD,"d/m/Y");


                        
                ?>
             <tr>
                 <td><?= $array->nome?></td>   
                 <td><?= $array->sobrenome?></td>   
                 <td><?= $dataBR?></td>   
                 <td><?= $array->genero?></td>   
                 <td><?= $array->estado_civil?></td>
                 <td>
                     <a onclick="mensagen()" href="delete.php?id=<?= $array->id?>">Excluir</a>
                 </td>                     
                             
            </tr>
            
            <?php } ?>
            
            <tr>
                <td class="mensagemRegistro" colspan="6">
                    
                <?php
     
                   $totalRegistros = mysqli_affected_rows($conn);
                   echo "Foram Encontrados $totalRegistros registros";
                
                ?>
                
                </td>
                
            </tr>
            
            
        </table>
 
    </body>
</html>
