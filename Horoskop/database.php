<?php


// Databaskoppling mot min Horoskop DB i XAMPP. localhost adress.

class Database {
    function __construct() {
        $dsn = 'mysql:host=localhost;dbname=horoscope;';
        $user =  'root';
        $password = '';    
    
    try {
        $this->connection=new PDO($dsn, $user, $password);
    } catch (PDOexeption $e) {
        throw: $e;
        }
    }
}



?>