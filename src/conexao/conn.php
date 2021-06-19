<?php

    // Declarar as variáveis necessárias para gerar a minha conexão com o banco de dados....
    // $hostname = "";
    // $dbname = "";
    // $username = "";
    // $password = "";
  
    $hostname = "";
    $dbname = "";
    $username = "";
    $password = "";


    try {
        $pdo = new PDO('mysql:host='.$hostname.';dbname='.$dbname, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo 'Conexão realizada com sucesso!';
    } catch (PDOException $e) {
        echo 'Error: '.$e->getMessage();
    }