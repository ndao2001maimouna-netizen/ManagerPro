<?php

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
}

