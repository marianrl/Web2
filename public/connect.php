<?php
    require "db_data.php";

    try{
        $con = new PDO ("mysql:dbname=$database;host=$hostname;port=$port",$username,$password);
    }catch (PDOException $e){
        //aca le mostramos mensaje amigable....
        echo "Error de conxión:".$e->getMessage();
    }
?>