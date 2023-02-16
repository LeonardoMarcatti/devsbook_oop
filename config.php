<?php
    
    session_start();
    $base = '/programacao/curso/B7Web/php/devsbook_oop/';
    $host = 'localhost';
    $db = 'devsbook';
    $user = 'leo';
    $password = 'Aa119539$';

    try {
        $conection = new PDO("mysql:host=$host;dbname=$db", "$user", "$password");
    } catch (Throwable $th) {
        echo 'Erro linha: ' . $th->getLine() . "<br>";
        echo ('Código: ' . $th->getMessage());
    };
