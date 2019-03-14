<?php



    try{

        $obj = new PDO("mysql:database=db_loja_noite;host=localhost","root","");
        echo "conectou";
    }catch(PDOException $e){

        echo "Erro ao Conectar: ". getMessage($e);

    }catch(Exception $e){


       echo "Erro Generico: ". getMessage($e);

    }



  $pdo = $obj->fechAll(PDO::FECH_ASSOC);



?>