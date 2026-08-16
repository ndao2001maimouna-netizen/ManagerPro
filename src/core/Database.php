<?php

namespace App\Core;

class Database {
    private static ?PDO $pdo = null;

    private function __construct() {}

    private function __clone() {}

    public static function getConnexion(): PDO {
        if (self::$pdo === null) {
            try {
                self::$pdo = new PDO(
                    "pgsql:host=localhost;dbname=managerpro;port=5432",
                    "postgres",
                    "user123"
                );
            } 
            catch (\Throwable $th) {
                $cheminSqlite = dirname(dirname(__DIR__)) . "/erp.db";
                self::$pdo = new PDO("sqlite:" . $cheminSqlite);
            }
            
            self::$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        
        return self::$pdo; 
    }

    public static function query(string $sql, bool $single = true):array{
        $query = self::getConnexion()->query($sql);
        $result= $single ? $query->fetch():$query->fetchAll();
        return $result != false ? $result : [];
    }


    public static function prepare(string $sql, array $datas) {
        $prepare = self::getConnexion()->prepare($sql);
        $prepare->execute($datas);
        return $prepare;
    }


    public static function executeQuery(string $sql, array $datas, bool $single = true) : array {
        $statement=self::prepare( $sql,  $datas);
    
       $result = $single ? $statement->fetch():$statement->fetchAll();
        return $result != false ? $result : [];
    }

    
    public static function executeUpdate( string $sql, array $datas) : int {
        prepare($pdo, $sql,  $datas);
        
        return (str_starts_with(strtoupper($sql), 'INSERT'))  ? $pdo->lastInsertId() : $prepare->rowCount();
    }

}

