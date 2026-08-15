<?php

class Database{
    function deconnecteDB():PDO{

static $pdo = null;

if($pdo == null){

$pdo = new PDO(
        "pgsql:host=localhost;dbname=managerPro;port=5432",
        "postgres",
        "user1234"
    );

    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   

}

     return $pdo;
}

}