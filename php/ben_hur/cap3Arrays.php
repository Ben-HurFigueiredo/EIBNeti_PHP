<html>
    
    <title>
    Curso de PHP
    </title>    
    <body>
        
        <h1> Capítulo 3 - Arrays </h1>
        <hr noshade>
        
        <?php
        
        #Criando Arrays
        $criandoArray = array();
        
        $cores = array("Azul","Amarelo","Verde","Rosa","Lilás");
        
        $jogos = array(0 => "Super Mário", 1 => "Mortal Kombat", 2 => "Sonic");
        
        
        $nomes[] = "Jéssica Alba";
        $nomes[] = "Cristiano Araújo";
        $nomes[] = "Sandra Bullock";
        $nomes[] = "Robert Downey Jr";
        
        
        #Acessando os Arrais
        
        echo '$cores: '.$cores[2]."<br><br>";
        
        echo '$jogos: '.$jogos[0]."<br><br>";
            
        echo '$nomes: '.$nomes[3]."<br><br><br>";
        
        echo "<table border='1'>";
        
        
        foreach($nomes as $k => $v){
            
            echo "<tr><td>$v</td></tr>";
            
        }
        
        echo '</table><hr noshade>';
        
       
        echo "<h3>criando Arrays associativos</h3>";
        
        
        $hex =array("vermelho" => "#FF0000", "verde" => "#00FF00", "Azul" => "#0000FF" );
        
        $pessoa["nome"] ="Leticia de Souza";
        $pessoa["idade"] = 33;
        $pessoa["rua"] = "Rua do Bairro";
        $pessoa["bairro"] ="Bairro da Rua";
        $pessoa["cidade"] ="Cidade do Bairro";
        
        #Acessando arrays
        
        echo $hex["verde"]."<br>";
        echo $pessoa["bairro"]."<br><hr>";
            
        echo "<h3> Criando Iterações com foreach </h3>";
        
        
         $fruta = array("Cor"=>"Vermelha", "sabor"=>"doce", "formato"=>"redonda", "nome"=>"maçã") ;
        
         echo "<table width='300' border='1'>";
         foreach($fruta as $chave=>$valor){
             
             
             echo "<tr>
                    <th align='center'>$chave</th>
                    <td align='center'>$valor</td>
                   </tr>";           
         }
        echo "</table><br><br>";
            
            
        $funcionario["Gerente"] = "Andre Freitas";
        $funcionario["Salario"] = "5450.00";
        
        $funcionario["Gerente"] .= " De Souza";
        $funcionario["Salario"] += "1200.34";
        
        echo $funcionario["Gerente"]."<br>";
        echo $funcionario["Salario"]."<br>";
        
        echo"<hr> <h3>Array Multidimensional</h3><br>";
        
        
        
        $veiculos = array(
            "palio" => array(
                "ano" => "2018",
                "cor" => "azul",
                "potencia" => "1.0"
            ),
            "Gol" => array(
                "ano" => "2019",
                "cor" => "branco",
                "potencia" => "1.6"
            ),
            "corsa" => array(
                "ano" => "2018",
                "cor" => "preto",
                "potencia" => "2.0"
            ),
            "Camaro" => array(
                "ano" => "2015",
                "cor" => "Amarelo",
                "potencia" => "5.5"
            )
        );
        # Criando iteraçoes em array
        ?>
         <table width='300' border='1'>
        <?php
             echo "<tr>
                    <th align='center'>Carro</th>";
         foreach($veiculos as $chave=>$valor){
             
             
                    foreach($valor as $subvalor=>$subsubvalor){
                        
                        echo "<th>   $subvalor</th>";
                        
                    }
                        echo "<td>$chave</td></tr>";
                  
         }
         
        
        echo "</table><br><br>";
        
        
        
        #array_push
             
        $a = array("Vermelho","Rosa","azul");
             
        array_push($a,"lilas","Roxo");
        
        echo "<pre>";     
        print_r($a);
        echo "</pre>";
        #array_pop
        
        array_pop($a);     
        array_pop($a);     
        array_pop($a);     
        
        echo "<pre>";     
        print_r($a);
        echo "</pre>";
        
        #array_shift -> remove elemento no inicio
        array_shift($a);
        
        echo "<pre>";     
        print_r($a);
        echo "</pre>"; 
             
        #array_unshift -> remove elemento no inicio
        array_unshift($a,"Amarelo");
        
        echo "<pre>";     
        print_r($a);
        echo "</pre>";
       
             
       #array Merge
             
        $timesCariocas = array("Famengo","Vasco","Fluminense");
        $timesPaulistas = array("São Paulo","Palmeiras","Santos");
             
             
             
        $campeonatoRioSaoPaulo = array_merge($timesCariocas,$timesPaulistas);
             
             
        echo "<pre>";     
        print_r($campeonatoRioSaoPaulo);
        echo "</pre>";
        
             
        #array keys
             
        $aluno = array("matricula"=>'0012', "nome"=>"Liliane", "idade"=>"14");
        
        $indices = array_keys($aluno);     
             
        echo "<pre>";     
        print_r($indices);
        echo "</pre>";
             
        #array Values
             
        $aluno = array("matricula"=>'0012', "nome"=>"Liliane", "idade"=>"14");
        
        $valores = array_values($aluno);     
             
        echo "<pre>";     
        print_r($valores);
        echo "</pre>"; 
        
        $color = array("green","yellow","blue","gray","puple","white","black");
             
             $fatia = array_slice($color, 2, 4);
            
             
        echo "<pre>";     
        print_r($fatia);
        echo "</pre>";     
             
        
        # Array Count
             
        echo 'comprimento da array $color é: '.count($color)."<br>";
             
        
        #in_array
         
         if(in_array('Café',$color)){
             
             
             echo 'Café Encontrado';
             
         }else{
             
             echo "Café NÃO encontrado";
         }    
                         
         $bebidas = array("suco","agua","vodka","vinho","leite");
         sort($bebidas);
             
         echo "<pre>";     
         print_r($bebidas);
        echo "</pre>";         
             
             
       
             
             
             
        ?> 
             
        
    </body>
    
</html>




