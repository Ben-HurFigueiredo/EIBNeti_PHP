<?php


   class Conecta{
       
       static private $Instancia = NULL;
       
       
       private static function pegarInstancia(){
           
           if(self::Instancia == NULL){
               
               $dsn = "mysql: host=localhost;dbname:pdo_noturno";
               $options = [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'];
               self::$Instancia = new PDO($dsn,"root", "",$options);
               self::$Instancia->setAttribute(PDO::ATR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
           
           }
           
           return self::$Instancia;
           
       }
       
       protected static function preparaSQL($sql){
           
           return self:pegarInstancia()->prepare($sql);
               
       }
         
       
       
   }

