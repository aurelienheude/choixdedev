<?php 

    $host = "localhost";
    $database = "choixdedev";
    $user = "root";
    $password = "";

    try{
        $sql=new PDO("mysql:host=".$host.";dbname=".$database."","".$user."","");
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
    
?>