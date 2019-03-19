<html>
    
    <title>
        <meta charset="utf-8">
        
    </title>

    <body>
        
        <?php



            try{

                $obj = new PDO("mysql:dbname=db_loja_noite;host=localhost","root","");

            }catch(PDOException $e){

                echo "Erro ao Conectar: ". $e->getMessage();

            }catch(Exception $e){


               echo "Erro Generico: ". $e->getMessage();

            }




           $pdo = $obj->query("SELECT * FROM v_inner_simples_cli_uf");
           $resultado = $pdo->fetchAll(PDO::FETCH_ASSOC);

           echo "<pre>";
           print_r($resultado);
           echo "</pre>";

        ?>

           <table width="90%" align="center" border="1">
               
                <tr>
                 
                <?php
                        
                       //$contar = $resultado->rowCount();
                 
                        foreach($resultado[0] as $k=>$v){
                            
                            echo "<th>$k</th>";
                                                       
                        }   
                 
                ?>
                    
                </tr>
                    
                <?php    
                 
                    for($i=0; $i< count($resultado); $i++){
                    
                        echo"<tr>";
                         foreach($resultado[$i] as $k=>$v){

                                echo "<td>$v</td>";

                         }
                        echo"</tr>";

                    } 
                                                   
                ?>
                                                  
           </table>


  
        
    </body>
    
</html>

