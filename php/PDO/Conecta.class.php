<?php



   #classe responsavel pela instancia de conexao


class Conecta{
    
    
    # atributo
    private static $Instancia;
    
    private static function pegarInstancia(){
        
        
        if(is_null(self::$Instancia)){
        
            try{
                
                $dsn = "mysql:host=localhost;dbname=pdo_teste";
                $options =[PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'];
                self::$Instancia = new PDO($dsn, "root","",$options);
                self::$Instancia->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                self::$Instancia->setAttribute(PDO::ATRR_DEFAULT_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
                
            }catch(PDOExcepton $e){
                
                echo "Erro: " .$e->getMessage();
                
            }
        
        }       
        return self::$Instancia;                  
    }
    
    # retorna o statement preparado na conexao estabelecida
    
    protected static function preparaSQL($sql){  
        return self::pegarInstancia()->prepare($sql);
    
    }
    
}