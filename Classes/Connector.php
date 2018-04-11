<?php

//namespace classes;


trait Connector {

    function connect() {
        
        $dsn = "mysql:host=localhost; dbname=books_library";
        $user = "User";
        $password = "user";
        try {
            $pdo = new PDO($dsn, $user, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Oops! Failed to connect.... " . $e->getMessage();
        }
        return $pdo;
    }

}
